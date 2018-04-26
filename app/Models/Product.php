<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $appends = ['average_review', 'discounted_price', 'reviews_count'];

    public function items()
    {
        return $this->hasMany(ProductItem::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getAverageReviewAttribute()
    {
        if($this->reviews->count() != 0)
            return round($this->reviews->sum('rate') / $this->reviews->count(), 1);
        return 0.0;
    }

    public function getDiscountedPriceAttribute()
    {
        return round($this->price - $this->price * ($this->discount/ 100), 2);
    }

    public function getReviewsCountAttribute()
    {
        return $this->reviews->count();
    }
}
