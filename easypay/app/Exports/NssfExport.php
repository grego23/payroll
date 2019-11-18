<?php

namespace App\Exports;
use \App\Company;
use \App\Employee;
use \App\User;

use DB;
use Auth;

use Maatwebsite\Excel\Concerns\FromCollection;

class NssfExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('employees')
        ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)->
        select('employees.first_name','employees.last_name',
        'employees.middle_name','employees.id_number','employees.nssf',
        'deductions.nssf_deduct'
        )->get();
    }
}
