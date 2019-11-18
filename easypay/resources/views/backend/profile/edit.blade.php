@extends('layouts.dashlay')

@section('content')
    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10"> Edit Information</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        
                                        <li class="breadcrumb-item"><a href="company-info.html">Edit profile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                                         
        <div class="alert alert-success" id="suc">
             <div class="writeinfo" style="font-weight:bold;"></div>  
        </div>
		         @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  
             
                                </div>
								
								   <div class="col-md-12 col-xl-12">
                                   <div class="row">
                                   <div class="col-md-6 col-xl-6">
                                    <div class="card user-card">
                                        <div class="card-block">   <h5>Update User Information</h5>
                                                    <hr>
										
									{{Form::model($post,array('route'=>array('profile.update',$post->id),'class'=>'form','method'=>'put','role'=>'form','files'=>true))}} 
 @csrf @method('PUT') 
                                       
                                                <div class="row">
                                             
                                                    <div class="col-md-6">
                                                   
                                                        <div class="form-group">
                                                     
                                                            <label class="form-label">Username</label>
                                                           {{Form::text('name',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Email</label>
                                                             {{Form::text('email',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Telephone</label>
                            {{Form::text('phone',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-large">Update Profile</button>
                                                    </div>
                                              
                                                    
                                                    
                                                    
                                                </div>
                                               
                                            </form>
										
            
            </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-xl-6">
                                    <div class="card user-card">
                                 
                                        <div class="card-block">
                                        <h5>Upload Profile Picture</h5>
                                                    <hr>
										
                                                    {{Form::model($post,array('route'=>array('newprofile',$post->id),'class'=>'form','method'=>'post','role'=>'form','files'=>true))}} 
 @csrf @method('POST') 
                                       
                                                <div class="row">
                                           
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Update Profile Logo</label>
                                                            {{ Form::file('imgurl',array('class'=>'form-control')) }}<br>
                                                            <input type="hidden" name="id" value="{{$post['id']}}"/>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-large">Upload Photo</button>
                                                    </div>
                                              
                                           
													
                                                    
                                                    
                                                </div>
                                               
                                            </form>
										
            
            </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>  
                               <div class="col-md-6 col-xl-6">
                                      <div class="card user-card">
                                 
                                        <div class="card-block">
                                            
                                                    {{Form::model($post,array('route'=>array('updatepass',$post->id),'class'=>'form','method'=>'post','role'=>'form','files'=>true))}} 
 @csrf @method('POST') 
                                               <h5>Update Password</h5>
                                                    <hr>
                                   <div class="row">
                                      
                                              <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">New Password</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter new password" >
                                                            <input type="hidden" name="id" value="{{$post['id']}}"/>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-large">Update Password</button>
                                                    </div>
                                                  
                                          </form>
                                       </div>
                                         </div>
                                                    </div>
                                       
                                       </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	
	


  

@endsection






