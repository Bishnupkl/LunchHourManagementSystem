<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'category','picture','is_today_item'
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
