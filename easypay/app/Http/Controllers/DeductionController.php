<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Deduction;
use \App\Employee;
use \App\Company;
use Auth;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class DeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp=DB::table('employees')
        ->join('deductions','deductions.emp_id','=','employees.employee_number')->
        select('employees.salary','deductions.personal_relief','deductions.insurance_relief','deductions.pension_fund','deductions.hosp','deductions.occupier_interest','disability_excemption','deductions.tax','deductions.nhif_deduction'
)->get();

        //
        return view('backend.deduction.index')->with('comp',$comp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $emp=Employee::select('user_id', 'employee_number')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
     
         $comp=DB::table('employees')
        ->join('deductions','deductions.emp_id','=','employees.employee_number')->
        select('employees.salary','deductions.id','deductions.personal_relief','deductions.insurance_relief','deductions.pension_fund','deductions.hosp','deductions.occupier_interest','disability_excemption','deductions.tax','deductions.nhif_deduction'
)->get();



        
	
        return view('backend.deduction.create',compact('comp','emp'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp_number = $request->get('emp_number');
        if (Deduction::where('emp_id', '=', $emp_number)->count() > 0) {
                return Redirect::to('deduction/create')->with('error','***No new record was created because record already exists***');

}else{
    $emp_number = $request->get('emp_number');

    $emp=Employee::select('salary')->where('employee_number','=',$emp_number)->get();
    foreach($emp as $empa){
      $sal=$empa['salary'];
    }
 

	    $emp_number = $request->get('emp_number');
        $relief = $request->get('p_relief');
        $insure= $request->get('insurance');
        $pension = $request->get('pension');
        $hosp = $request->get('hosp');
        $occ = $request->get('occupier');
        $tax = $request->get('tax');
        $nh = $request->get('nhif');
        $ns= $request->get('nssf');  
        $dis= $request->get('disability');  
       
        $id = Auth::user()->id;
        if($sal < 5999){
            $cut=150;
         
        }if($sal >= 6000 && $sal <= 7999){

            $cut=300;
     
    }if($sal >= 8000 && $sal <= 11999){

        $cut=400;

    }
    if($sal >= 12000 && $sal <= 14999){
        $cut=500;

       
    }
    if($sal >= 15000 && $sal <= 19999){

        $cut=600;
        
    }
    if($sal >= 20000  && $sal <= 24999){

        $cut=700;
   
    }
    if($sal >= 25000 && $sal <=29999 ){

        $cut=800;
 
    }
    if($sal >= 30000 && $sal <=34999 ){

        $cut=850;
  
    }
    if($sal >= 35000 && $sal <=39999){

        $cut=900;
    }
    if($sal >= 35000 && $sal <=39999){

        $cut=950;
      
}
    if($sal >= 40000 && $sal <=44999){

        $cut=1000;
    
    }
    if($sal >= 45000 && $sal <=49999){

        $cut=1100;
     
    }
    if($sal >= 50000 && $sal <=59999){

        $cut=1200;
    }

    if($sal >= 60000 && $sal <=69999){

        $cut=1300;
     
    }
    if($sal >= 70000 && $sal <=79999){
        $cut=1400;
      
       
    }
    if($sal >= 80000 && $sal <=89999){
        $cut=1500;
        
       
    }
    if($sal >= 90000 && $sal <=99999){
        $cut=1600;
    
       
    }
    if($sal >= 100000){
        $cut=1700;
    
    }
    if($ns==1){
        $val=720;
        
    }
    if($ns==2){
      $val=1440;
     
    }

       $profile = new Deduction;
       $profile->user_id    = $id;
       $profile->emp_id    = $emp_number;
       $profile->insurance_relief  = $insure; 
       $profile->personal_relief  = $relief; 
       $profile->pension_fund = $pension; 
       $profile->occupier_interest  = $occ;
       $profile->disability_excemption  = $dis; 
       $profile->hosp  = $hosp; 
       $profile->nssf_deduct  = $val; 
       $profile->nhif_deduction  = $cut;
       $profile->save(); 
        
			
			
				

     
    
        
       return Redirect::to('deduction/create')->with('message','New deduction  record was added successfully created');
}
    
    }
	
	public function ajax(Request $request){
		
			
		$organize = $request->get('organization');
        $email = $request->get('email');
        $kra = $request->get('kra');
        $address = $request->get('addressone');
        $postal = $request->get('postal');
        $phone = $request->get('phone');
        $currency = $request->get('currency');
        $info = $request->get('info');
        $emp = $request->get('emp');
        $id = Auth::user()->id;
       
       $profile = new Company;
       $profile->user_id    = $id;
       $profile->organization_name    = $organize;
       $profile->kra_pin  = $kra; 
       $profile->email  = $email; 
       $profile->physical_address  = $address;
       $profile->postal_address  = $postal; 
       $profile->phone =  $phone;
       $profile->currency  =  $currency;
       $profile->info = $info;
       $profile->num_of_employees = $emp;
       $profile->save();
    

	    return $data = [
  'success' => true,
  'message'=> 'New record  was successfully created '
] ;

return response()->json($data);



 
	
       
    
   
		
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $comp = Deduction::findOrFail($id);
      
         return view('backend.deduction.show',compact('comp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post = deduction::findOrFail($id);
        return view('backend.deduction.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $post = Deduction::findOrFail($id);
       
        $post->update($request->all());
  
        return Redirect::to('deduction/create')
                        ->with('message','The record was updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deduction::destroy($id);
  
        return Redirect::to('deduction/create')
                        ->with('message','The record was deleted successfully');
    }
}
