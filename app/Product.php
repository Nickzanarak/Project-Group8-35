<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = "id_product";

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','id_users');
    }

}
