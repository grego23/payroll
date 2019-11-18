<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\NssfExport;


use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
class ExportnssfController extends Controller
{
    
    /**

    * @return \Illuminate\Support\Collection

    */

 
    public function export() 

    {

        return Excel::download(new NssfExport, 'nssf.xlsx');

    }

  




}
