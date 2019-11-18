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
                                    	<a href="/employee/create"  class="btn btn-success"><i class="feather icon-arrow"></i>--Back--</a>
                                    <div class="page-header-title">
                                        <h5 class="m-b-10"> View Employee Information</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        
                                        <li class="breadcrumb-item"><a href="company-info.html">view Employee Information</a></li>
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
								
                                                <div class="row">
                                                   
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">First Name</label>
                                        
                                                             <input type="text"  class="form-control" value="{{$comp->first_name}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Middle Name</label>
                          
                            <input type="text"  class="form-control" value="{{$comp->middle_name}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Last Name</label>
                                                         
                                                            <input type="text"  class="form-control" value="{{$comp->last_name}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Date Of Birth</label>
                                                     
                                                             <input type="text"  class="form-control" value="{{$comp->dob}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Gender</label>
                                                           
                                                             <input type="text"  class="form-control" value="{{$comp->gender}}" disabled/>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Residence</label>
                                                         
                                                             <input type="text"  class="form-control" value="{{$comp->residence}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Id Number</label>
													
                                                            <input type="text"  class="form-control" value="{{$comp->id_number}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                 
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Kra Pin</label>
												
                                                            <input type="text"  class="form-control" value="{{$comp->kra_pin}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nssf</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->nssf}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nhif</label>
															
                                                            <input type="text"  class="form-control" value="{{$comp->nhif}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Marital Status</label>
                                                            <input type="text"  class="form-control" value="{{$comp->nhif_deduction}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Employee Number</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->employee_number}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Job Title</label>
												
                                                            <input type="text"  class="form-control" value="{{$comp->job_title}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
													  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Employment Type</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->employement_type}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Date of employment</label>
															
                                                            <input type="text"  class="form-control" value="{{$comp->date_employment}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Department</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->department}}" disabled/>
                                                        </div>
                                                    </div>
                                                    
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Region</label>
															
                                                            <input type="text"  class="form-control" value="{{$comp->region}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Salary</label>
                                                            <input type="text"  class="form-control" value="{{$comp->salary}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Account Name</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->acc_name}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Account Number</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->acc_number}}" disabled/>
                                                    </div>
													</div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Bank Name</label>
															
                                                            <input type="text"  class="form-control" value="{{$comp->bank_name}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Bank Branch</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->bank_branch}}" disabled/>
                                                        </div>
                                                    </div>
													  <!--<div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nssf Amount</label>
											
                                                            <input type="text"  class="form-control" value="{{$comp->ns_1}}" disabled/>
                                                        </div>
                                                    </div>
													  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nhif Amount</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->ns_2}}" disabled/>
                                                        </div>
                                                    </div>-->
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Personal Email</label>
										
                                                            <input type="text"  class="form-control" value="{{$comp->p_email}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone</label>
												
                                                            <input type="text"  class="form-control" value="{{$comp->phone}}" disabled/>
                                                        </div>
                                                    </div>
                                                    
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Postal Address</label>
													
                                                            <input type="text"  class="form-control" value="{{$comp->postal_address}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Residential Address</label>
													
                                                            <input type="text"  class="form-control" value="{{$comp->residential_address}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Official Email</label>
													
                                                            <input type="text"  class="form-control" value="{{$comp->official_email}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Official Phone</label>
											
                                                            <input type="text"  class="form-control" value="{{$comp->official_phone}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Next of kin First Name</label>
											
                                                            <input type="text"  class="form-control" value="{{$comp->kin_first_name}}" disabled/>   
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Next of kin Last Name</label>
												
                                                            <input type="text"  class="form-control" value="{{$comp->kin_last_name}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Relation</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->relation}}" disabled/>
                                                        </div>
                                                    </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Email</label>
												
                                                            <input type="text"  class="form-control" value="{{$comp->kin_email}}" disabled/>
                                                        </div>
                                                    </div>
                                                       <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->kin_phone}}" disabled/>
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






