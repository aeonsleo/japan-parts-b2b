<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\OEMProductRequest;
use App\Models\Country;
use App\Models\PriceSlab;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        $this->middleware('permission:supplier');
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->product_type == Product::AFTERMARKET) {
            return redirect('/supplier/products/aftermarket/create');
        }
        if($request->has('part_number')) {
            return redirect()->route('supplier.product.create-oem', ['part_number' => $request->part_number]);
        }

        if($request->has('search_part')) {
            return redirect()->route('supplier.product.create-oem', ['search_part' => 1]);
        }

        return view('suppliers.products.create');
    }


    /**
     * Show the form for creation of OEM Product
     * 
     * @return \Illuminate\Http\Response      
     */
    public function createOemProduct()
    {
        $countries = Country::orderBy('country_name')->get();

        return view('suppliers.products.create-oem', compact('countries'));
    }

    /**
     * Store OEM product data
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function storeOemProduct(OEMProductRequest $request)
    {
        DB::beginTransaction();

        $product = new Product();
        $product->type = 'oem';
        $product->part_number = $request->part_number;
        $product->name = $request->part_name;
        $product->brand_name = $request->brand_name;
        $product->weight = $request->weight;
        $product->height = $request->height;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->description = $request->description;
        $product->min_order_quantity = $request->min_order_quantity;
        $product->max_order_quantity = $request->max_order_quantity;
        $product->unit_price = $request->unit_price;
        $product->lead_time = $request->lead_time;
        $product->is_new = $request->is_new;
        $product->in_stock = $request->in_stock;
        
        $product->country_id = $request->country_id;
        $userId = Auth::user()->id;
        $product->supplier_id = Supplier::where('user_id', $userId)->first()->id;
        $product->tax_id = Tax::where('tax_code','vat')->first()->id;

        // dd($request->all());
        $product->save();

        //save the price slabs if any
        if($request->units_from) {
            $count = count($request->units_from);
            for($i=0; $i<$count; $i++) {
                $priceSlab = new PriceSlab();

                $priceSlab->price = $request->input_price[$i];
                $priceSlab->units_from = $request->units_from[$i];
                $priceSlab->units_to = $request->units_to[$i];
                $priceSlab->product_id = $product->id;

                $priceSlab->save();
            }

        }

        DB::commit();

        return redirect()->route('supplier.home')
        ->with('success','Product saved successfully!');
    }

    /**
     * Show the form for creation of AFterMarket Product
     */
    public function createAftermarketProduct()
    {
        return view('suppliers.products.create-aftermarket');
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
        //
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
}
