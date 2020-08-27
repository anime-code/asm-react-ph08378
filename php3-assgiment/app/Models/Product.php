<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id', 'name', 'cate_id', 'short_desc', 'price', 'detail', 'star'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cate_id', 'id');
    }
}
