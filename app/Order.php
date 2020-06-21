<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'code_order', 'idUser', 'address', 'email', 'phone', 'money', 'message', 'status',
    ];

    public function User() {
        return $this->belongsTo('App\User', 'idUser', 'id');
    }
}
