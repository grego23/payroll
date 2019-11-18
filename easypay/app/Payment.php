<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //

    protected $fillable = [
        'user_id',
        'salary',
        'emp_id',
        'taxsal',
        'personal_relief',
       'insurance_relief',
       'pension_fund',
       'personal_relief',
       'occupier_interest',
       'hosp',
       'nhif_deduction',
       'nssf_deduct',
        'amount',
        'disability_excemption',
        'month',
        'status'
    ];

}
