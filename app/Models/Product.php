<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $guarded = ['id'];

    public function imageRelation()
    {
        $this->hasMany('App\Models\ImagesProduct','product_id','id');
    }
}
