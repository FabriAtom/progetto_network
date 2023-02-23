<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'category_id'
    ];

    public function category() 
    {
        // il post appartiene a uan categoria
        return $this->belongsTo('App\Category');
        // return $this->belongsTo('App\Category','category_id','id');
    }
}
