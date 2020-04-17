<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected es una palabra reservada que encapsula la table categories para protegerla con seguridad 
    protected $table = 'categories';
    //  el metodo $fillable sirve para tomar los datos que queremos mostrar
    
    protected $fillable = [

        'name'


    ];
    public function articles(){

        return $this->belongsTo('App\Article');

    }
}
