<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PriceSlab extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function createSlabs(Request $request, Product $product)
    {
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
    }
}
