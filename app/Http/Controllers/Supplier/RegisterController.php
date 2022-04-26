<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRegisterRequest;
use App\Models\Address;
use App\Models\Country;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    use RegistersUsers;
    
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/supplier/home';

    /**
     * Constructor
     */    
    function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Register a Supplier
     *
     * @return \Illuminate\Http\Response
     */    
    public function showForm()
    {
        $countries = Country::orderby('country_name')->get();
        return view('suppliers.register', compact('countries'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(SupplierRegisterRequest $request)
    {
        DB::transaction(function () use($request) {
            //Register the Supplier as a user
            event(new Registered($user = $this->create($request->all())));
    
            //Add supplier role to the user
            $role = Role::where('name','Supplier')->first();
            if(!$role) {
                $role = Role::create(['name' => 'Supplier']);
            }
    
            $user->assignRole([$role->id]);
    
            $request->request->add(['contact_person_name'=> $request->name]);
            // Save the Supplier Details
            $supplier =  Supplier::create(array_merge($request->all(), ['user_id' => $user->id]));
    
            // Save the Supplier Address
            $request->supplier_id = $supplier->id;
            $address = Address::create(array_merge($request->all(), ['user_id' => $user->id]));

            //Login the user
            $this->guard()->login($user);
    
            if ($response = $this->registered($request, $user)) {
                return $response;
            }
        });

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }    

    /**
     * The supplier has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(SupplierRegisterRequest $request, $user)
    {
        return redirect('/supplier/home');
    }    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }    

}
