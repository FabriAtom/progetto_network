<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    
    public function posts() 
    {
        // relazione diretta, tabella indipendente e post tabella dipendendente, una categoria ha molti post
        return $this->hasMany('App\Post');


        // versione estesa
        // return $this->hasMany('App\Post','category_id','id');
    }
}
