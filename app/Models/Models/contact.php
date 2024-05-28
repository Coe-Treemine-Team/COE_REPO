<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'no_hp',
        'email',
        'description',

    ];

    protected $table = 'contact_us';
    protected $keyType = 'string';
    public    $incrementing = false;
    public    $timestamps  = false;

}
