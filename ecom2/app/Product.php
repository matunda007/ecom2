<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
protected $fillable=['name','description','size','image','category_id','price','id'];

    public function category()
    {
        $this -> belongsTo(category::class);




    }
}
