<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\EmployeesExport;

use App\Imports\EmployeesImport;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
class ExportemployeeController extends Controller
{
    
    /**

    * @return \Illuminate\Support\Collection

    */

    public function importExportView()

    {

       return view('backend.excel.create');

    }

    public function export() 

    {

        return Excel::download(new EmployeesExport, 'employees.xlsx');

    }

    public function import() 

    {

        Excel::import(new EmployeesImport,request()->file('file'));

           

      return Redirect::to('employee/create')
                        ->with('message','The records were inserted successfully');

    }




}
