<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email','image'
    ];

}
