<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Position;
use Auth;
use Validator;
use \App\Employee;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp=Position::select('id', 'title', 'rate')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();

        //
        return view('backend.position.index')->with('comp',$comp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comp=Position::select('id','user_id', 'title', 'rate')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
        return view('backend.position.create',compact('comp'));
	
        
    }
    
       public function payview(Request $request)
    {
        $d= $request->get('year');
     
        $comp=Employee::select('id','user_id', 'first_name', 'last_name','middle_name','dob','kra_pin','salary')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
        return view('backend.payroll.index',compact('comp'));
	
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		      
    
    
    }
	
	public function ajax(Request $request){
		
			
	    $title= $request->get('title');
        $rate = $request->get('rate');
        $id = Auth::user()->id;
       
       $profile = new Position;
       $profile->user_id    = $id;
       $profile->title    = $title;
       $profile->rate = $rate; 
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
         $post = Position::findOrFail($id);
        return view('backend.position.edit',compact('post'));
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
       $post = Position::findOrFail($id);
       
        $post->update($request->all());
  
        return Redirect::to('position/create')
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
        Position::destroy($id);
  
        return Redirect::to('position/create')
                        ->with('message','The record was deleted successfully');
    }
}
