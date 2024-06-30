<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'product_name',
        'price',
        'weight',
        'description',
        'images',
        'id_category',
    ];

    protected $table = 'products';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;
}
