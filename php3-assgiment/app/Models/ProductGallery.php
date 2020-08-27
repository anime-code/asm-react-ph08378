<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $table = 'product_galleries';
    protected $fillable = ['product_id', 'img_url'];

    public function product()
    {
        $this->belongsTo('App/Models/Product', 'product_id', 'id');
    }
}
