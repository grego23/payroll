<?php

namespace App\Http\Controllers;
use \App\Company;
use \App\Employee;
use \App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          $comp=Company::select('user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
        $count=Company::select('user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email')->where('user_id','=',Auth::user()->id)->count();
        return view('dashboardtwo')->with('comp',$comp)->with('count',$count);
    }
    public function dashboard()
    {
         $users=User::count();

        
        $comp2=Company::select('user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
        $count=Company::select('user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email')->where('user_id','=',Auth::user()->id)->count();
      $comp=Employee::select('id','user_id', 'p_email', 'first_name','last_name','kra_pin','phone','residential_address')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->take(6)->get();
          $emp=Employee::select('id','user_id', 'p_email', 'first_name','last_name','kra_pin','phone','residential_address')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->count();
        return view('dashboardtwo')->with('emp',$emp)->with('count',$count)
        ->with('users',$users)->with('comp',$comp);
    }
}
