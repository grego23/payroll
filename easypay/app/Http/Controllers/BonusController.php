<?php

namespace App\Http\Controllers;

use \App\Employee;
use \App\Bonus;
use Auth;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp=Employee::select('user_id', 'employee_number')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
     
        $comp=DB::table('employees')
       ->join('deductions','deductions.emp_id','=','employees.employee_number')->
       select('employees.salary','deductions.personal_relief','deductions.insurance_relief','deductions.pension_fund','deductions.hosp','deductions.occupier_interest','disability_excemption','deductions.tax','deductions.nhif_deduction'
)->get();

        //
        return view('backend.bonus.create')->with('comp',$comp);
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
       ->join('bonuses','bonuses.employee_id','=','employees.employee_number')->
       select('bonuses.id','bonuses.employee_id','bonuses.reason','bonuses.amount','bonuses.month'
)->get();

return view('backend.bonus.create',compact('comp','emp'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'reason' => 'required',
            'amount' => 'required|numeric',
            'month' => 'required',
            'emp_number' => 'required'
        ]);
         
        if ($validator->fails()) {
             //Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput();
        }else{


        $emp_number = $request->get('emp_number');
        if (Bonus::where('employee_id', '=', $emp_number)->count() > 0) {
                return Redirect::to('bonus/create')->with('error','***No new record was created because record already exists***');

}else{
		   	
	    $reason= $request->get('reason');
        $amount = $request->get('amount');
        $month= $request->get('month');
        $emp= $request->get('emp_number');
        $id = Auth::user()->id;
        $profile = new Bonus;
        $profile->user_id    = $id;
        $profile->employee_id    = $emp;
        $profile->reason  = $reason; 
        $profile->amount = $amount; 
       $profile->month = $month; 
      
       $profile->save(); 
        return Redirect::to('bonus/create')->with('message','New bonus record was added successfully created');
}
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comp = Bonus::findOrFail($id);
      
        return view('backend.bonus.show',compact('comp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Bonus::findOrFail($id);
        return view('backend.bonus.edit',compact('post'));
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
        $post = Bonus::findOrFail($id);
       
        $post->update($request->all());
  
        return Redirect::to('bonus/create')
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
    Bonus::destroy($id);
  
        return Redirect::to('bonus/create')
                        ->with('message','The record was deleted successfully');
    }
}
