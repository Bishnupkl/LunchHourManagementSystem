<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function food()
    {
        return $this->hasMany(Food::class);
    }

    public function kitchenStaff()
    {
        return $this->hasMany(KitchenStaff::class);
    }


}
