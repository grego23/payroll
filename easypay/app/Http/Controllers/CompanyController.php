<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Company;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp=Company::select('user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();

        //
        return view('backend.company.index')->with('comp',$comp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$comp=Company::select('id','user_id', 'organization_name', 'kra_pin','physical_address','postal_address','phone',
        'currency','info','num_of_employees','email')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->get();
        
        $count=Company::where('user_id','=',Auth::user()->id)->count();
        
        return view('backend.company.create',compact('comp','count'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		      
				
				

     
    
        $organize = $request->get('orgnization');
        $email = $request->get('email');
        $kra = $request->get('kra');
        $address = $request->get('addressone');
        $postal = $request->get('postal');
        $phone = $request->get('phone');
        $currency = $request->get('currency');
        $info = $request->get('info');
        $emp = $request->get('employee');
        $id = Auth::user()->id;
        $emp_number = $request->get('emp_number');
        if (Company::where('user_id', '=', $id)->count() > 0) {
                return Redirect::to('company/create')->with('error','***No new record was created !!1 yo can ony create one company***');

}else{
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
       return Redirect::to('company')->with('message','New record was added successfully');
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
        if (Company::where('user_id', '=', $id)->count() > 0) {
           
            return $data = [
                'success' => true,
                'message'=> '***No new record was created !! you can ony create one company***'
              ] ;
              
              return response()->json($data);
}else{
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
    
    }

 
	
      public function updateImage(Request $request){
          $id=$request->get('id');
  
           
		  $file = array('image' => $request->get('imgurl'));
		 
		  $destinationPath = 'images'; // upload path
		
  
      $extension = Input::file('imgurl')->getClientOriginalExtension(); // getting image extension
	
      $fileName = rand(11111,99999).'.'.$extension; // renameing image

      Input::file('imgurl')->move($destinationPath, $fileName); // uploading file to given path
   
        $path = Input::file('imgurl')->getRealPath();

        $name = Input::file('imgurl')->getClientOriginalName();

        $destinationLink=$destinationPath.'/'.$fileName;
        
        $data=['image'=>$destinationLink];

	    $post = Company::findOrFail($id);
       
        $post->update($data);
      
	 
  

        return 'success';
      } 
    
   
		
	

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $comp = Company::findOrFail($id);
      
         return view('backend.company.show',compact('comp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post = Company::findOrFail($id);
        return view('backend.company.edit',compact('post'));
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
       $post = Company::findOrFail($id);
       
        $post->update($request->all());
  
        return Redirect::to('company/create')
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
        Company::destroy($id);
  
        return Redirect::to('company/create')
                        ->with('message','The record was deleted successfully');
    }
}
