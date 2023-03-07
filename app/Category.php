<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    protected $fillable = [
        'categories'
    ];
    
    public function posts() 
    {
        // relazione diretta, tabella indipendente e post tabella dipendendente, una categoria ha molti post
        return $this->hasMany('App\Post');

        // select * from 'posts' where posts.category_id === ?   $this->id
        // versione estesa
        // return $this->hasMany('App\Post','category_id','id');
    }
}
