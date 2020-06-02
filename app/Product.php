<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'sasi_gjendje',
        'sasi_peshe'

    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
