<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug', 'status',
    ];

    public function ProductType() {
        return $this->hasMany('App\ProductType', 'idCategory', 'id');
    }
}
