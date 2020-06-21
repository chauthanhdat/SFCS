<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = [
        'name', 'slug', 'description', 'quantity', 'price', 'promotional', 'idCategory', 'idProductType', 'status',
    ];

    public function ProductType() {
        return $this->belongsTo('App\ProductType', 'idProductType', 'id');
    }

    public function Category() {
        return $this->belongsTo('App\Category', 'idCategory', 'id');
    }
}
