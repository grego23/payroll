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
                                        
                                        <li class="breadcrumb-item"><a href="company-info.html">Edit Orgaization Information</a></li>
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
                                    <div class="card user-card">
                                        <div class="card-block">
										
									{{Form::model($post,array('route'=>array('company.update',$post->id),'class'=>'form','method'=>'put','role'=>'form','files'=>true))}} 
 @csrf @method('PUT') 
                                       
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Organization's Registered Name</label>
                                                           {{Form::text('organization_name',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">KRA PIN</label>
                                                             {{Form::text('kra_pin',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Physical Address</label>
                            {{Form::text('physical_address',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Postal Address</label>
                                                            {{Form::text('postal_address',null,array('class'=>'form-control'))}} 
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
                                                            <label class="form-label">Phone Number</label>
                                                             {{Form::text('phone',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Currency</label>
															{{Form::text('currency',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Any 0ther information</label>
															 {{Form::textarea('info',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Number of employees</label>
															{{Form::text('num_of_employees',null,array('class'=>'form-control'))}} 
                                                          
                                                    </div>
													</div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Currency</label>
																			{{Form::text('currency',null,array('class'=>'form-control'))}}
                                                          
                                                    </div>
													</div>
                                                    
                                                </div>
                                                    <button type="submit" class="btn btn-primary"  >Submit</button>
                                            </form>
                                            
                                    
										
            
            </div>
                   <div class="col-md-12 col-xl-12">
                            
                                           <div class="col-md-6 pull-right">
                                               	{{Form::model($post,array('route'=>array('updateimage'),'class'=>'form','method'=>'post','role'=>'form','files'=>true))}} 
                                                        <div class="form-group">
                                                            <label class="form-label">Update company Logo</label>
											
															 {{ Form::file('imgurl',array('class'=>'form-control')) }}<br>
															<input type="hidden" name="id" value="{{$post['id']}}"/>
															  <input type="submit" class="btn btn-primary"  value="submit" />
                                            </form>
															 
                                                           
                                                        </div>
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






