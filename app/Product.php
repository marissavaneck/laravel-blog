<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected  $fillable = ['productname', 'description','price'];

    public function reviews(){
        return $this->hasMany('App\Review');
    }


}
