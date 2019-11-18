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
										
									{{Form::model($post,array('route'=>array('employee.update',$post->id),'class'=>'form','method'=>'put','role'=>'form','files'=>true))}} 
 @csrf @method('PUT') 
                                       
                                                <div class="row">
                                                   
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">First Name</label>
                                                             {{Form::text('first_name',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Middle Name</label>
                            {{Form::text('middle_name',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Last Name</label>
                                                            {{Form::text('last_name',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Date Of Birth</label>
                                                             {{Form::text('dob',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Gender</label>
                                                             {{Form::text('gender',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Residence</label>
                                                             {{Form::text('residence',null,array('class'=>'form-control'))}} 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Id Number</label>
															{{Form::text('id_number',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                 
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Kra Pin</label>
															{{Form::text('kra_pin',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nssf</label>
															{{Form::text('nssf',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nhif</label>
															{{Form::text('nhif',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Marital Status</label>
															{{Form::text('marital_status',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Employee Number</label>
															{{Form::text('employee_number',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Job Title</label>
															{{Form::text('job_title',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
													  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Employment Type</label>
															{{Form::text('employement_type',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Date of employment</label>
															{{Form::text('date_employment',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Department</label>
															{{Form::text('department',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Region</label>
															{{Form::text('region',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Salary</label>
															{{Form::text('salary',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Account Name</label>
															{{Form::text('acc_name',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Account Number</label>
															{{Form::text('acc_number',null,array('class'=>'form-control'))}} 
                                                          
                                                    </div>
													</div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Bank Name</label>
															{{Form::text('bank_branch',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Bank Branch</label>
															{{Form::text('bank_branch',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
													  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nssf Amount</label>
															{{Form::text('ns_1',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
													  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nhif Amount</label>
															{{Form::text('ns_2',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Personal Email</label>
															{{Form::text('p_email',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone</label>
															{{Form::text('phone',null,array('class'=>'form-control'))}} 
                                                           
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
                                                            <label class="form-label">Residential Address</label>
															{{Form::text('residential_address',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Official Email</label>
															{{Form::text('official_email',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Official Phone</label>
															{{Form::text('official_phone',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Next of kin First Name</label>
															{{Form::text('kin_first_name',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Next of kin Last Name</label>
															{{Form::text('kin_last_name',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Relation</label>
															{{Form::text('relation',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Email</label>
															{{Form::text('kin_email',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                       <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone</label>
															{{Form::text('kin_phone',null,array('class'=>'form-control'))}} 
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary"  >Submit</button>
                                            </form>
										
            
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






