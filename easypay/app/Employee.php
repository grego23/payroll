<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'user_id', 'first_name', 'last_name','middle_name','dob','gender',
        'residence','id_number','kra_pin','nssf','nhif','marital_status','employee_number','job_title',
        'employement_type','date_employment','department','region','salary','taxsal','acc_number',
        'bank_name','bank_branch','ns_1','ns_2','p_email','phone','postal_address',
        'residential_address','official_email','official_phone','kin_first_name'
        ,'kin_last_name','relation','kin_email','kin_phone'
    ];



}
