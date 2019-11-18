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
                                        
                                        <li class="breadcrumb-item"><a href="company-info.html">View Deduction</a></li>
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
                                                            <label class="form-label">Employee Id </label>
                                                            <input type="text"  class="form-control" value="{{$comp->emp_id}}" disabled/>
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Personal Relief</label>
                                                            
                                                             <input type="text"  class="form-control" value="{{$comp->personal_relief}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Insurance Relief</label>
                         
                            <input type="text"  class="form-control" value="{{$comp->insurance_relief}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Pension Fund</label>
                                                           
                                                            <input type="text"  class="form-control" value="{{$comp->pension_fund}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Hosp</label>
                                                        
                                                             <input type="text"  class="form-control" value="{{$comp->hosp}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Occupier Interest</label>
                                                           
                                                             <input type="text"  class="form-control" value="{{$comp->occupier_interest}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Disability Excemption</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->disability_excemption}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nhif Deduction</label>
														
                                                             <input type="text"  class="form-control" value="{{$comp->nhif_deduction}}" disabled/>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nssf Deduction</label>
														
                                                            <input type="text"  class="form-control" value="{{$comp->nssf_deduct}}" disabled/>
                                                          
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






