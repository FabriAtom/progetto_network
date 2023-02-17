<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'address',
        'category',
        'phone',
        'image',
         'cv',
    ];
}
