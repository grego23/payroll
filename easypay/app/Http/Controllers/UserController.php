<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee;
use \App\User;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $comp=User::select('id', 'name', 'phone','email')->orderBy('id','desc')->get();
        return view('backend.users.index',compact('comp'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comp=Employee::select('id','user_id', 'p_email', 'first_name','last_name','kra_pin','phone','residential_address')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
        return view('backend.users.create',compact('comp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $fname = $request->get('fname');
        $lname = $request->get('lname');
        $mname = $request->get('mname');
        $dob = $request->get('dob');
        $gender= $request->get('gender');
        $res= $request->get('resident');
        $region= $request->get('region');
        $id_num = $request->get('idnumber');
        $pin = $request->get('kra');
        $nsf= $request->get('nssf');
        $nhf= $request->get('nhif');
        $marital = $request->get('marital');
        $title = $request->get('job');
        $emp = $request->get('emptype');
        $empnumber =  $request->get('empnumber');
        $date= $request->get('emp_date');
        $depart = $request->get('department');
        $sal = $request->get('salary');
        $acc_number = $request->get('accnumber');
        $bname = $request->get('bankname');
        $branch = $request->get('bankbranch');
        $n1 = $request->get('ns1');
        $n2 = $request->get('ns2');
        $email= $request->get('email');
        $phone = $request->get('phone');
        $postal = $request->get('postal');
        $resadd = $request->get('resaddress');
        $oemail = $request->get('official_email');
        $ophone = $request->get('official_phone');
        $kfirst = $request->get('kname');
        $klast = $request->get('klast');
        $relate =  $request->get('relation');
        $kphone= $request->get('k_phone');
        $kemail = $request->get('k_email');
        $type = $request->get('emptype');
        $accname = $request->get('accname');

        $id = Auth::user()->id;
  
        $profile = new Employee;
        $profile->user_id   = $id;
        $profile->first_name   = $fname;
        $profile->last_name   = $lname;
        $profile->middle_name   = $mname;
        $profile->dob = $dob;
        $profile->gender   = $gender;
        $profile->residence = $res;
        $profile->id_number  = $id_num;
        $profile->kra_pin  = $pin;
        $profile->nssf  = $nsf;
        $profile->nhif   = $nhf;
        $profile->marital_status   = $marital;
        $profile->employee_number   = $empnumber ;
        $profile->job_title  = $title;
        $profile->employement_type = $type;
        $profile->date_employment = $date;
        $profile->department  = $depart;
        $profile->region  = $region;
        $profile->salary   = $sal;
        $profile->acc_number   = $acc_number;
        $profile->bank_name  = $bname;
        $profile->bank_branch  = $branch;
        $profile->ns_1  = $n1;
        $profile->ns_2  = $n2;
        $profile->p_email  = $email;
        $profile->phone  = $phone;
        $profile->postal_address  = $postal;
        $profile->residential_address  = $resadd;
        $profile->official_email  = $oemail;
        $profile->official_phone  = $ophone;
        $profile->kin_first_name  = $kfirst;
        $profile->kin_last_name  = $klast;
        $profile->relation   = $relate;
        $profile->kin_email   = $kemail;
        $profile->kin_phone = $kphone;
        $profile->acc_name = $accname;
        $profile->save();
      
        return Redirect::to('users/create')->with('message','New record was added successfully');


      
    }

    public function ajax(Request $request){
        $title = $request->get('title');
        $name = $request->get('name');
			
   $organize = $request->get('fname');
   $email = $request->get('mname');
   $kra = $request->get('lname');
   $address = $request->get('dob');
   $postal = $request->get('gender');
   $phone = $request->get('resident');
   $currency = $request->get('krapin');
   $info = $request->get('nssf');
   $emp = $request->get('nhif');
   $emp = $request->get('marital');
   $organize = $request->get('emp_no');
   $email = $request->get('emp_type');
   $kra = $request->get('jo_title');
   $address = $request->get('date_emp');
   $postal = $request->get('department');
   $phone = $request->get('region');
   $currency = $request->get('salary');
   $info = $request->get('accountname');
   $emp = $request->get('accountno');
   $emp = $request->get('bankname');
   $organize = $request->get('bankbranch');
   $email = $request->get('ns1');
   $kra = $request->get('ns2');
   $address = $request->get('pemail');
   $postal = $request->get('phone');
   $phone = $request->get('postal');
   $currency = $request->get('residence2');
   $info = $request->get('office_email');
   $emp = $request->get('office_phone');
   $emp = $request->get('kin_name');
   $emp = $request->get('kin_lastname');
   $emp = $request->get('kin_email');
   $emp = $request->get('relation');
   $emp = $request->get('kin_phone');
   
   return $data = [
'success' => true,
'message'=> 'New record  was successfully created '
] ;

return response()->json($data);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       





  


   
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Employee::findOrFail($id);
        return view('backend.users.edit',compact('post'));
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
        $post = Employee::findOrFail($id);
       
        $post->update($request->all());
  
        return Redirect::to('user')
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
        User::destroy($id);
  
        return Redirect::to('user')
                        ->with('message','The record was deleted successfully');
    }
}
