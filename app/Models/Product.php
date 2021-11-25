<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
