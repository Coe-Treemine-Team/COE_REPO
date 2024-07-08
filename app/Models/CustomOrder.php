<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomOrder extends Model
{
    use HasFactory;

    // Specify the table name if it does not follow Laravel's convention
    protected $table = 'custom_orders';

    // Specify the fillable properties
    protected $fillable = [
        'dimensions',
        'base_material',
        'layer_count',
        'finish_type',
        'solder_mask_color',
    ];
}
