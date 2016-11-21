<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\OrderDetail;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'order_date',
        'user_name',
        'first_name',
        'last_name',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
        'email',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderDetails()
    {
    	return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
