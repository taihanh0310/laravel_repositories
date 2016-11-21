<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class OrderDetail extends Model
{
    protected $table = "orderdetails";
    protected $fillable = [
        'order_id',
        'album_id',
        'quantity',
        'unit_price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
