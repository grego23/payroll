<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Company;
use \App\Employee;
use \App\Payment;
use DB;
use Auth;
use Validator;
use PDF;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;



class PayrollController extends Controller
{

public  function processpay($id){

    $payments=DB::table('employees')
    ->join('deductions','deductions.emp_id','=','employees.employee_number')->where('deductions.emp_id','=',$id)->
    select('employees.first_name','employees.last_name',
    'employees.salary','deductions.personal_relief',
    'deductions.insurance_relief',
    'deductions.pension_fund','deductions.hosp',
    'deductions.occupier_interest',
    'disability_excemption',
    'deductions.tax',
    'deductions.nhif_deduction',
    'deductions.nssf_deduct', 'employees.taxsal'
    )->get();



foreach($payments as $pay){
$sal=$pay->salary;
$pas=$pay->personal_relief; 
$insurance=$pay->insurance_relief ;
$fund=$pay->pension_fund; 
$hosp=$pay->hosp; 
$occ=$pay->occupier_interest; 
$dis=$pay->disability_excemption; 
$tax=$pay->taxsal; 
$nhif=$pay->nhif_deduction; 
$nssf=$pay->nssf_deduct; 
$first=$pay->first_name;
$last=$pay->last_name;  
}

$deductions = $pas+$insurance+$fund+$hosp+$occ+$dis+$nhif+$nssf;

//$taxSal=$tax/100*$sal;

$dixs=$deductions;

$newsal=$tax;

$finalSal = $tax -$deductions;

$total=number_format((float)$finalSal, 2, '.', '');
$date=date("l jS \of F Y");
$date2=date("F Y");
$comp=\App\Company::select('organization_name')->where('user_id','=',Auth::user()->id)->get();

$data=['sal'=>$sal,
'first'=>$first,
'last'=>$last,
'emp'=>$id,
'date'=>$date,
'total'=>$total,
'pas'=>$pas,
'tax'=>$tax,
'deduct'=>$deductions,
'insure'=>$insurance,
'fund'=>$fund,
'hosp'=>$hosp,
'occ'=>$occ,
'dis'=>$dis,
'nhif'=>$nhif,
'nssf_deduct'=>$nssf,
'dix'=>$dixs,
'comp'=>$comp,
'date2'=>$date2,
'finDuct'=>$finalSal];

$pdf =PDF::loadView('receipt',$data);
return $pdf->stream();
}

public  function getemp(){
    $comp=DB::table('employees')
    ->join('deductions','deductions.emp_id','=','employees.employee_number')->where('deductions.user_id','=',Auth::user()->id)
    ->join('bonuses','bonuses.employee_id','=','employees.employee_number')
    ->
    select('employees.id','employees.first_name','employees.last_name',
    'employees.salary','employees.taxsal','deductions.personal_relief',
    'deductions.insurance_relief',
    'deductions.pension_fund','deductions.hosp',
    'deductions.occupier_interest',
    'disability_excemption',
    'deductions.tax',
    'deductions.nhif_deduction',
    'deductions.nssf_deduct', 'deductions.emp_id','bonuses.amount'
    )->get();

    return view('backend.payroll.create',compact('comp'));

}




public  function processall(){
    $data=DB::table('employees')
    ->join('deductions','deductions.emp_id','=','employees.employee_number')->where('deductions.user_id','=',Auth::user()->id)
    ->join('bonuses','bonuses.employee_id','=','employees.employee_number')
    ->
    select('employees.first_name','employees.last_name',
    'employees.salary','employees.taxsal','deductions.personal_relief',
    'deductions.insurance_relief',
    'deductions.pension_fund','deductions.hosp',
    'deductions.occupier_interest',
    'disability_excemption',
    'deductions.tax',
    'deductions.nhif_deduction',
    'deductions.nssf_deduct', 'deductions.emp_id','bonuses.amount'
    )->get();
   
    //foreach($payments as $pay){
     //   $sal=$pay->salary;
     //   $pas=$pay->personal_relief; 
      //  $insurance=$pay->insurance_relief ;
      //  $fund=$pay->pension_fund; 
      //  $hosp=$pay->hosp; 
        //$occ=$pay->occupier_interest; 
       // $dis=$pay->disability_excemption; 
       // $tax=$pay->tax; 
       // $nhif=$pay->nhif_deduction; 
       // $nssf=$pay->nssf; 
       // $first=$pay->first_name;
        //$last=$pay->last_name;  
        //$id=$pay->emp_id;  
       // }
        
       // $deductions = $pas+$insurance+$fund+$hosp+$occ+$dis+$nhif+$nssf;
        
       // $taxSal=$tax/100*$sal;
        
       // $dixs=$deductions;
        
       // $newsal=$sal - $taxSal;
       // $finalSal = $newsal -$deductions;
       // $finDuct=$deductions  + $taxSal;
       // $total=number_format((float)$finalSal, 2, '.', '');
       $tot=\App\Employee::select('salary')->where('user_id','=',Auth::user()->id)->sum('salary');
       $date=date("F,Y");
       $comp=\App\Company::select('organization_name')->where('user_id','=',Auth::user()->id)->get();
      
    $pdf =PDF::loadView('payroll',compact('data','tot','date','comp'));
    $pdf->setPaper('A4', 'landscape');
return $pdf->stream();
}


public  function processroll(Request $request){
    $search = $request->get('search');

  $case = $request->get('case');

    $payments=DB::table('employees')
    ->join('deductions','deductions.emp_id','=','employees.employee_number')->where('deductions.user_id','=',Auth::user()->id)
    ->join('bonuses','bonuses.employee_id','=','employees.employee_number')
    ->
    select('deductions.user_id','employees.first_name','employees.last_name',
    'employees.salary','employees.taxsal','deductions.personal_relief','employee_number',
    'deductions.insurance_relief',
    'deductions.pension_fund','deductions.hosp',
    'deductions.occupier_interest',
    'disability_excemption',
    'deductions.tax',
    'deductions.nhif_deduction',
    'deductions.nssf_deduct', 'deductions.emp_id','bonuses.amount'
    )->get()->toArray();
    $id=Auth::user()->id;
    


   foreach($payments as $pay){
       $sal=$pay->salary;
       $pas=$pay->personal_relief; 
     $insurance=$pay->insurance_relief ;
       $fund=$pay->pension_fund; 
       $hosp=$pay->hosp; 
        $occ=$pay->occupier_interest; 
       $dis=$pay->disability_excemption; 
        $tax=$pay->taxsal; 
        $nhif=$pay->nhif_deduction; 
       $nssf=$pay->nssf_deduct; 
        $first=$pay->first_name;
        $last=$pay->last_name;  
        $emp=$pay->employee_number; 
        $data2=[
            'month'=>$search,
            'user_id'=>$id,
            'salary'=>$sal,
            'emp_id'=>$emp,
            'taxsal'=>$tax,
            'personal_relief'=>$id,
           'insurance_relief'=>$insurance,
           'pension_fund'=>$fund,
           'personal_relief'=>$pas,
           'occupier_interest'=>$occ,
           'hosp'=>$hosp,
           'nhif_deduction'=>$nhif,
           'nssf_deduct'=>$nssf,
            'amount'=>$occ,
            'disability_excemption'=>$dis,
            'status'=>'paid'
    
        ];
       
    
         Payment::create($data2);
        
       }

    
       $data=DB::table('employees')
       ->join('deductions','deductions.emp_id','=','employees.employee_number')->where('deductions.user_id','=',Auth::user()->id)
       ->join('bonuses','bonuses.employee_id','=','employees.employee_number')
       ->
       select('employees.first_name','employees.last_name',
       'employees.salary','employees.taxsal','deductions.personal_relief',
       'deductions.insurance_relief',
       'deductions.pension_fund','deductions.hosp',
       'deductions.occupier_interest',
       'disability_excemption',
       'deductions.tax',
       'deductions.nhif_deduction',
       'deductions.nssf_deduct', 'deductions.emp_id','bonuses.amount'
       )->get();
   

    foreach($payments as $pay){
        $sal=$pay->salary;
        $pas=$pay->personal_relief; 
        $insurance=$pay->insurance_relief ;
        $fund=$pay->pension_fund; 
       $hosp=$pay->hosp; 
        $occ=$pay->occupier_interest; 
       $dis=$pay->disability_excemption; 
       $tax=$pay->tax; 
        $nhif=$pay->nhif_deduction; 
        $nssf=$pay->nssf_deduct; 
        $first=$pay->first_name;
        $last=$pay->last_name;  
        $id=$pay->employee_number;  
        }
        
        $deductions = $pas+$insurance+$fund+$hosp+$occ+$dis+$nhif+$nssf;
        
        $taxSal=$tax/100*$sal;
        
        $dixs=$deductions;
        
       $newsal=$sal - $taxSal;
        $finalSal = $newsal -$deductions;
       $finDuct=$deductions  + $taxSal;
        $total=number_format((float)$finalSal, 2, '.', '');
       $tot=\App\Employee::select('salary')->where('user_id','=',Auth::user()->id)->sum('salary');
       $date=date("F,Y");
      $comp=\App\Company::select('organization_name','image')->where('user_id','=',Auth::user()->id)->get();
      
      $pdf =PDF::loadView('payroll',compact('data','tot','date','comp'));
      $pdf->setPaper('A4', 'landscape');
      return $pdf->stream();
}
       //return view('backend.payroll.index',compact('payments'));
}


