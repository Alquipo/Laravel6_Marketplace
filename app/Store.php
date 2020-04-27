<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
   protected $fillable = ['name','description','phone','mobile_phone', 'slug'];

    //relação de um para um

    public function user(){
       return $this->belongsTo(User::class);
    }

    //relação de muitos para um
    public function products(){
        return $this->hasMany(Product::class);
    }
}
