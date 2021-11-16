<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The product that the image belongs to
     */
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
