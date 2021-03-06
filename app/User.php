<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Store;
use App\Order;
use App\Cart;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function stores(){
        return $this->hasMany(Store::class,'user_id','id');
    }
    
    public function orders(){
        return $this->hasMany(Store::class,'email','email');
    }
    
    public function cart(){
        return $this->hasOne(Cart::class,'user_id','id');
    }

    public function getTotalPrice(){
        if($this->cart){
            return $this->cart->getTotalPrice();
        }
        return 0;
    }
}
