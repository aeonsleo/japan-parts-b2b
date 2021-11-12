<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFieldOption extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = ['name', 'category_field_id'];

    public function categoryField()
    {
        return $this->belongsTo(CategoryField::class);
    }
}
