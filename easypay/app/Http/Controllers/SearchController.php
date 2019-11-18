<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Payment;
use DB;
use Redirect;
use Auth;

class SearchController extends Controller
{
    public function search(Request $request){
      $search=$request->get('search');

 
      //$users = User::whereRaw('date(created_at) = ?', [date($search)])->get();
      $count=Payment::where('month','LIKE', $search)->count();
      if($count <=0 ){
        return Redirect::back()
        ->with('message','sorry no records were found.');

      }else{
      $comp=Payment::where('month','LIKE', $search)->where('user_id','=',Auth::user()->id)->get();
      }
      return view('backend.records.index',compact('comp'))->with('message','Records were found.');

    }
}
