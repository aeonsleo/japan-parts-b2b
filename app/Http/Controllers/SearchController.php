<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('part')) {
            $partNumber = $request->part;
            $products = Product::where('part_number', $partNumber)->with('images')->get();

            return view('search_results', compact('products', 'partNumber'));
        }
    }
}
