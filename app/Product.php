<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{ 
   protected $fillable = ['name','description','body','price','slug'];
    
    //relação de muitos para um
    public function store(){
        return $this->belongsTo(Store::class);
    }
    //relação de muitos para muitos

    public function categories(){
        return $this->belongsToMany(Category::class);    }
}
