<?php

namespace App;

use App\Models\Product;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password',];

    protected $hidden = ['password', 'remember_token',];

    public function wishlist()
    {
        return $this->belongsToMany(Product::class, 'wishlists');
    }
}
