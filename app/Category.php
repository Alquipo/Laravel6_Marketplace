<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
   protected $fillable = ['name','description', 'slug'];
   
   
    //relação de muitos para muitos
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
