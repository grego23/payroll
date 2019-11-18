<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Company;
use \App\Employee;
use \App\User;

use DB;
use Auth;
use Validator;
use PDF;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ReportController extends Controller
{

function getNhif(){
    $data=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)->
    select('employees.first_name','employees.last_name',
    'employees.middle_name','employees.id_number','employees.nhif',
    'deductions.nhif_deduction'
    )->get();

    $count=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)->count();
    $total=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)
    ->sum('deductions.nhif_deduction');
    $date=date("F Y");
   
    return view('backend.report.nhif',compact('data','count','total','date'));

}


function getNssf(){
    $data=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)->
    select('employees.first_name','employees.last_name',
    'employees.middle_name','employees.id_number','employees.nssf',
    'deductions.nssf_deduct'
    )->get();

    $count=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)->count();
    $total=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)
    ->sum('deductions.nssf_deduct');
    $date=date("F Y");
   
    return view('backend.report.nssf',compact('data','count','total','date'));

}

function exportPdf(){
    $data2=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)->
    select('employees.first_name','employees.last_name',
    'employees.middle_name','employees.id_number','employees.nhif',
    'deductions.nhif_deduction'
    )->get();
    $comp=\App\Company::select('organization_name')->where('user_id','=',Auth::user()->id)->get();
    foreach($data2 as $pay){
        $f=$pay->first_name;
        $l=$pay->last_name; 
        $m=$pay->middle_name;
        $i=$pay->id_number; 
        $nh=$pay->nhif; 
        $nhf=$pay->nhif_deduction; 
        }

$data=[
'first'=>$f,
'last'=>$l,
'middle'=>$m,
'id'=>$i,
'nhif'=>$nh,
'ndeduct'=>$nhf,
'comp'=>$comp];

$pdf =PDF::loadView('nhreport',$data);
return $pdf->stream();


}


function exportNspdf(){
    $data2=DB::table('employees')
    ->join('deductions','deductions.user_id','=','employees.user_id')->where('deductions.user_id','=',Auth::user()->id)->
    select('employees.first_name','employees.last_name',
    'employees.middle_name','employees.id_number','employees.nssf',
    'deductions.nssf_deduct'
    )->get();
    $comp=\App\Company::select('organization_name')->where('user_id','=',Auth::user()->id)->get();
    foreach($data2 as $pay){
        $f=$pay->first_name;
        $l=$pay->last_name; 
        $m=$pay->middle_name;
        $i=$pay->id_number; 
        $nh=$pay->nssf; 
        $nhf=$pay->nssf_deduct; 
        }

$data=[
'first'=>$f,
'last'=>$l,
'middle'=>$m,
'id'=>$i,
'nssf'=>$nh,
'nssf_deduct'=>$nhf,
'comp'=>$comp];

$pdf =PDF::loadView('nsreport',$data);
return $pdf->stream();


}



}
