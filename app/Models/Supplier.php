<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    /**
     * The user that is associated with the supplier
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
