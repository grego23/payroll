<?php

namespace App\Exports;

use App\Employee;
use Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::select('first_name', 'last_name','middle_name','dob','gender',
        'residence','id_number','kra_pin','nssf','nhif','marital_status','employee_number','job_title',
        'employement_type','date_employment','department','region','salary','acc_number',
        'bank_name','bank_branch','ns_1','ns_2','p_email','phone','postal_address',
        'residential_address','official_email','official_phone','kin_first_name'
        ,'kin_last_name','relation','kin_email','kin_phone')->where('user_id','=',Auth::user()->id)->get();
    }
}
