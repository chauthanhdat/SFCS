<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    protected $fillable = [
        'idOrder', 'idProduct', 'quantity', 'price',
    ];

    public function Order() {
        return $this->belongsTo('App\Order', 'code_order', 'id');
    }

    public function Product() {
        return $this->belongsTo('App\Product', 'idProduct', 'id');
    }
}
