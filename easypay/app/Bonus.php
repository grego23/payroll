<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    protected $fillable = [
        'user_id', 'employee_id', 'reason','amount','month','phone'
    ];
}
