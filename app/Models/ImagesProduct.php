<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesProduct extends Model
{
    protected $table = 'images_product';

    protected $guarded = ['id'];

    public function productRelation()
    {
        $this->hasOne('App\Models\Product','id','product_id');
    }
}
