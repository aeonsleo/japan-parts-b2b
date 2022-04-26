<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\OEMProductRequest;
use App\Http\Traits\UploadImage;
use App\Models\Country;
use App\Models\PriceSlab;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Supplier;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    use UploadImage;

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
        $supplier = Supplier::where('user_id', Auth::user()->id)->first();

        $products = Product::where('supplier_id', $supplier->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('suppliers.products.index', compact('products'));
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
        
        $product = Product::createNew($request);
        
        // Save the images
        $files =  $this->uploadMultiple($request->file('images'), 'product-images/');
        ProductImage::storeImages($product, $files);

        //save the price slabs if any
        PriceSlab::createSlabs($request, $product);

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
        $product = Product::where('id', $id)->first();

        return view('suppliers.products.edit', compact('product'));
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
        $product = Product::where('id', $id)->first();

        $product->delete();
    }
}
