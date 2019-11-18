<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\NhifExport;


use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
class ExportnhifController extends Controller
{
    
    /**

    * @return \Illuminate\Support\Collection

    */

 
    public function export() 

    {

        return Excel::download(new NhifExport, 'nhif.xlsx');

    }

  




}
