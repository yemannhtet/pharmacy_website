<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poularItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'product_price',
        'product_image',
    ];
}
