<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    /**
     * The products associated with the discount
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
