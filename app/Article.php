<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [

        'title',
        'content',
        'category_id',
        'user_id'




    ];
    // relacion con category 
    public function category()
    {
        // el belongsTo sirve para hacer la relacion contraria con el modelo al relacionar

        return $this->belongsTo('App\Category');
    }
    // relacion con user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    // relacion con images
    public function images()
    {

        return $this->hasMany('App\Image');
    }
    // relacion con taGS
    public function tags()
    {

        return $this->belongsToMany('App\Tag');
    }
}
