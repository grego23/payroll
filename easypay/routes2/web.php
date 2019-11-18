<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/formval', function () {
    return view('modal');
});

Route::post('postajax',['as'=>'postajax','uses'=>'CompanyController@ajax']);
Route::post('testAjax',['as'=>'testAjax','uses'=>'PositionController@ajax']);
Auth::routes(['verify' => true]);
Route::resource('company','CompanyController');
Route::resource('user','UserController');
Route::resource('position','PositionController');
Route::resource('admin','AdminController');
Route::resource('employee','EmployeeController');
Route::resource('deduction','DeductionController');
Route::resource('bonus','BonusController');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('processpay/{id}', 'PayrollController@processpay');
Route::get('getpay', 'PayrollController@getemp');
Route::get('processall', 'PayrollController@processall');
Route::get('showusers', 'AdminController@showUsers');
Route::get('showcompany', 'AdminController@showCompany');
Route::get('showemployees', 'AdminController@showEmployee');
Route::get('/payroll', function () {
    return view('backend.payroll.create');
});


Route::post('payview',['as'=>'payview','uses'=>'PositionController@payview']);

Route::get('/deduct/{id}', function ($id) {
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
        'deductions.nssf'
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
    $nssf=$pay->nssf; 
    $first=$pay->first_name;
    $last=$pay->last_name;  
}

$deductions = $pas+$insurance+$fund+$hosp+$occ+$dis+$nhif+$nssf;

$taxSal=$tax/100*$sal;

$dixs=$deductions + $taxSal;

$newsal=$sal - $taxSal;
$finalSal = $newsal -$deductions;
$total=number_format((float)$finalSal, 2, '.', '');
$date=date("l jS \of F Y");
$comp=\App\Company::select('organization_name')->where('user_id','=',Auth::user()->id)->get();

$data=['sal'=>$sal,
'first'=>$first,
'last'=>$last,
'emp'=>$id,
'date'=>$date,
'total'=>$total,
'pas'=>$pas,
'tax'=>$taxSal,
'deduct'=>$deductions,
'rate'=>$tax,
'insure'=>$insurance,
'fund'=>$fund,
'hosp'=>$hosp,
'occ'=>$occ,
'dis'=>$dis,
'nhif'=>$nhif,
'nssf'=>$nssf,
'dix'=>$dixs,
'comp'=>$comp];

$pdf = PDF::loadView('receipt',$data);
return $pdf->stream();
});

Route::get('pdftest',function(){
	$pdf = PDF::loadView('receipt');
return $pdf->stream();
});



Route::get('export', 'ExportemployeeController@export')->name('export');

Route::get('importExportView', 'ExportemployeeController@importExportView');

Route::post('import', 'ExportemployeeController@import')->name('import');

Route::get('excelfile',function(){
	return view('backend.excel.create');
});

Route::get('getNhif', 'ReportController@getNhif');
Route::get('getNssf', 'ReportController@getNssf');
Route::get('exportnhif', 'ExportnhifController@export')->name('exportnhif');
Route::get('get_nhif_report_pdf', 'ReportController@exportPdf');
Route::get('get_nssf_report_pdf', 'ReportController@exportNspdf');
Route::get('exportnssf', 'ExportnssfController@export')->name('exportnssf');