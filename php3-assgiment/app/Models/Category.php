<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['cate_name', 'show_menu', 'desc'];

    public function product()
    {
        $this->hasMany('App\Models\Product', 'cate_id', 'id');
    }
}
