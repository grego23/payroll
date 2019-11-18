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
                                        <h5 class="m-b-10"> View Information</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        
                                        <li class="breadcrumb-item"><a href="company-info.html">View Company</a></li>
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
                                                            <label class="form-label">Email  </label>
                                                            <input type="text"  class="form-control" value="{{$comp->email}}" disabled/>
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Organization Name</label>
                                                            
                                                             <input type="text"  class="form-control" value="{{$comp->organization_name }}" disabled/>
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
                                                            <label class="form-label">Physical Address</label>
                                                           
                                                            <input type="text"  class="form-control" value="{{$comp->physical_address}}" disabled/>
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
                                                            <label class="form-label">Telephone</label>
                                                           
                                                             <input type="text"  class="form-control" value="{{$comp->phone}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Currency</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->currency}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Information</label>
														
                                                             <input type="text"  class="form-control" value="{{$comp->info}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">No Of Employees</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->num_of_employees}}" disabled/>
                                                          
                                                    </div>
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






