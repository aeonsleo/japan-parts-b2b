<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryField extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public function categoryField()
    {
        return $this->belongsto(CategoryField::class);
    }

    public function categoryFieldOption()
    {
        return $this->belongsTo(CategoryFieldOption::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
