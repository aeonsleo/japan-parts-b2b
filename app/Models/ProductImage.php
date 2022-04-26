<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['filename', 'filepath', 'product_id', 's3_bucket'];

    /**
     * The product that the image belongs to
     */
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Store multiple product images
     */
    public static function storeImages($product, $files)
    {
        foreach($files as $file) {
            ProductImage::create([
                'filename' => $file['fileName'],
                'filepath' => $file['filePath'],
                'product_id' => $product->id,
            ]);
        }
    }
}
