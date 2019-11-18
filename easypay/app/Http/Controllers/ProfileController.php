<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\User;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    public function getUser($id)
    {
        $post = User::findOrFail($id);
       
        return view('backend.profile.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = User::findOrFail($id);
       
        $post->update($request->all());
        return Redirect::back()
        ->with('message','The profile  information was updated successfully');
    
    }


    public function updateImage(Request $request){
        $id=$request->get('id');

         
        $file = array('image' => $request->get('imgurl'));
       
        $destinationPath = 'profile'; // upload path
      

    $extension = Input::file('imgurl')->getClientOriginalExtension(); // getting image extension
  
    $fileName = rand(11111,99999).'.'.$extension; // renameing image

    Input::file('imgurl')->move($destinationPath, $fileName); // uploading file to given path
 
      $path = Input::file('imgurl')->getRealPath();

      $name = Input::file('imgurl')->getClientOriginalName();

      $destinationLink=$destinationPath.'/'.$fileName;
      
      $data=['image'=>$destinationLink];

      $post = User::findOrFail($id);
     
      $post->update($data);
    
   

    return Redirect::back()
        ->with('message','The profile image information was updated successfully');
    
    
 
    } 
    
    
     public function updatePass(Request $request){
        $id=$request->get('id');

         
        $data = array('password' =>  Hash::make($request->get('password')));

       

      $post = User::findOrFail($id);
     
      $post->update($data);
    
      return Redirect::back()
        ->with('message','The password was  updated successfully');
    } 
  
 

}
