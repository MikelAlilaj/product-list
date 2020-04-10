<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =[
        'photo_id',
        'title',
        'body',
        'sasi_gjendje',
        'sasi_peshe'

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->hasMany('App/Photo');
    }
}
