<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
  protected $fillable = [
        'emp_id', 'insurance_relief', 'pension_fund','hosp','postal_address','occupier_interest',
        'disability_excemption','tax','nhif_deduction','nssf_deduct'];

}
