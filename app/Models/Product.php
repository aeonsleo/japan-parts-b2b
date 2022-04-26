<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Product model class: stores the information about car parts
 * This stores both spares and consumables.
 * 
 * @table 'products'
 */
class Product extends Model
{
    use HasFactory;
    const OEM = 'oem';
    const AFTERMARKET = 'aftermarket';

    /**
     * The images that belong to the product
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * The main image to be displayed in front
     */
    public function getmainImageAttribute()
    {
        if(count($this->images) > 0) {
            return $this->images[0];
        }
    }

    /**
     * The tax associated with the product
     */
    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }

    /**
     * The coutnry associated with the product
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * The supplier associated with the product
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    /**
     * The category the product belongs to
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The discounts associated with the product
     */
    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }

    public static function createNew(Request $request)
    {
        $product = new Product();
        $product->type = $request->type;
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
        
        $product->save();

        return $product;
    }
}
