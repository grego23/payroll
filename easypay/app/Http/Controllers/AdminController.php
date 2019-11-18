<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Employee;
use \App\User;
use \App\Company;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Company::count();
        $emp = Employee::count();
        $users = User::count();
        return view('backend.admin.admin',compact('count','emp','users'));
    }

    public function showUsers()
    {
        $users = User::all();
        return view('backend.admin.users',compact('users'));
    }
    public function showCompany(){
        $comp=Company::select('user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email')->orderBy('id','desc')->get();

        //
        return view('backend.admin.company')->with('comp',$comp);

     }
     public function showEmployee(){
        $comp=Employee::select('id','p_email', 'first_name','last_name','kra_pin','phone','residential_address')->orderBy('id','desc')->get();
        //
        return view('backend.admin.employee')->with('comp',$comp);

     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
