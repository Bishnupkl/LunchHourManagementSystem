<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['food_name', 'user_id','is_advanced'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
