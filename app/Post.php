<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'category_id',
        'artist_id',
    ];

    public function category() 
    {
        // il post appartiene a uan categoria
        return $this->belongsTo('App\Category');
        // return $this->belongsTo('App\Category','category_id','id');
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    static public function getUniqueSlugFrom($title) {
        // rigenerare lo slug
        $slug_base = Str::slug($title);
        $slug = $slug_base;
        $post_esistente = Post::where('slug', $slug)->first();
        $counter = 1;

        while ($post_esistente) {

            $slug = $slug_base . '-' . $counter;
            
            $post_esistente = Post::where('slug', $slug)->first();
            $counter++;
        }
        return $slug;
    }




    
}
