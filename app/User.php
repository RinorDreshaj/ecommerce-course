<?php

namespace App;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable, Billable;

    protected $fillable = ['name', 'email', 'password',];

    protected $hidden = ['password', 'remember_token',];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function wishlist()
    {
        return $this->belongsToMany(Product::class, 'wishlists');
    }
}
