<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Constructor 
     */    
    function __construct()
    {
        $this->middleware('permission:user-list', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $role = Role::where('name','Customer')->first();
        $users = $role->users()->paginate(10);

        return view('admin.users.index', ['users' => $users])
            ->with('i', ($request->input('page', 1) -1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'Create user here';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Deactivate a user
     * 
     * @param \Illumiate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function deactivate(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->status = 'deactivated';
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    /**
     * Ativate a user
     * 
     * @param \Illumiate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function activate(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->status = 'active';
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    /**
     * Approve a user
     * 
     * @param \Illumiate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->status = 'active';
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }

    /**
     * Ban a user
     * 
     * @param \Illumiate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function ban(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->status = 'banned';
        $user->save();

        return redirect()->route('users.show', ['user' => $user->id]);
    }
}
