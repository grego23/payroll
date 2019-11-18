<?php

namespace App\Imports;

use App\Employee;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
         'user_id' => Auth::user()->id,
        'first_name'  =>  $row['firstname'],
        'last_name'=> $row['lastname'],
        'middle_name'=> $row['middlename'],
        'dob'=> $row['dob'],
        'gender'=> $row['gender'],
        'residence'=> $row['residence'],
        'id_number'=> $row['idnumber'],
        'kra_pin'=> $row['krapin'],
        'nssf'=> $row['nssf'],
        'nhif'=> $row['nhif'],
        'marital_status'=> $row['maritalstatus'],
        'employee_number'=> $row['employeenumber'],
        'job_title'=> $row['jobtitle'],

        'employement_type'=> $row['employementtype'],
        'date_employment'=> $row['dateofemployment'],
        'department'=> $row['department'],
        'region'=> $row['region'],
        'salary'=> $row['salary'],
        'acc_number'=> $row['accountnumber'],
        'bank_name'=> $row['bankname'],
        'bank_branch'=> $row['bankbranch'],
        'ns_1'=> $row['nssfamount'],
        'ns_2'=> $row['nhifamount'],
        'p_email'=> $row['personalemail'],
        'phone'=> $row['phone'],
        'postal_address'=> $row['postaladdress'],
        'residential_address'=> $row['residential'],
        'official_email'=> $row['officialemail'],
        'official_phone'=> $row['officialphone'],
        'kin_first_name'=> $row['kinfirstname'],
        'kin_last_name'=> $row['kinlastname'],
        'relation'=> $row['relationship'],
        'kin_email'=> $row['kinemail'],
        'kin_phone'=> $row['kinphone'],
            
        ]);
    }
}
