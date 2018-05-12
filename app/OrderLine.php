<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $guarded = [];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
