<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductData extends Model
{
    use HasFactory;

    // Soft Delete
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'image',
        'description',
        'price'
    ];
}
