<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';

    protected $fillable = [
        'idCategory', 'name', 'slug', 'status',
    ];

    public function Category() {
        return $this->belongsTo('App\Category', 'idCategory', 'id');
    }
}
