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
                                        <h5 class="m-b-10">Add Employee</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="organizations.html">Organizations</a></li>
                                        <li class="breadcrumb-item"><a href="company-info.html">Organization Registration</a></li>
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
										<button  class="btn btn-primary"  data-toggle="modal" data-target="#mat"><i class="feather icon-edit"></i>Add new Record</button>
                                                                    <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr role="row"><th>First Name </th><th>Email</th><th>KRA PIN</th><th>Physical Address</th>
<th>X</th><th>X</th><th>X</th>
</tr>
</thead>
<tbody>
@foreach($comp as $info)
<tr role="row" class="odd">

<td class="sorting_1">{{$info['first_name']}}</td>
<td class="sorting_1">{{$info['p_email']}}</td>
<td>{{$info['kra_pin']}}</td>
<td>{{$info['residential_address']}}</td>


<td> <a href="" class="btn btn-primary"><i class="feather icon-eye"></i> View</a></td>
<td> <form action="{{ route('employee.edit',$info->id) }}" method="POST">

<a class="btn btn-success" href="{{ route('employee.edit',$info->id) }}"><i class="feather icon-edit"></i>Edit</a>

@csrf

</form>
                                                </td>
<td><form action="{{ route('employee.destroy', $info->id)}}" method="post">
   @method('DELETE')
   @csrf
   <button  class="btn btn-danger" type="submit"><i class="feather icon-trash"></i>Delete</button>
  
</form></td>
</tr>
@endforeach
</tbody>

</table>
            
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


	<!-- The Modal -->
<div class="modal fade" id="mat">
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px; !important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Position Information</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
        <!-- [ Form Validation ] start -->
                 
                                              <!-- [ Smart-Wizard ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Employee Registration</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                                    <!-- [ External toolbar sample ] start -->
                                                    <h5>Organization</h5>
                                                    <!--
                                                    <select id="theme_selector" class="form-control custom-select col-lg-6 col-sm-12">
                                                        <option value="default">default</option>
                                                        <option value="arrows">arrows</option>
                                                        <option value="dots">dots</option>
                                                    </select>
                                                    <!-- [ External toolbar sample ] End -->
                                                </div>
                                            </div>
                                            <!-- [ SmartWizard html ] start -->
                                            <div id="smartwizard">
                                                <ul>
                                                    <li><a href="#step-1">
                                                            <h6>Step 1</h6>
                                                            <p class="m-0">Personal Information</p>
                                                        </a></li>
                                                    <li><a href="#step-2">
                                                            <h6>Step 2</h6>
                                                            <p class="m-0">HR Information</p>
                                                        </a></li>
                                                    <li><a href="#step-3">
                                                            <h6>Step 3</h6>
                                                            <p class="m-0">Accounts Information</p>
                                                        </a></li>
                                                    <li><a href="#step-4">
                                                            <h6>Step 4</h6>
                                                            <p class="m-0">Contact Information</p>
                                                        </a></li>
                                                </ul>
                                                <div>
                                                    <div id="step-1">
                                                 <div class="form-row">
                                                           <label for="first-name">Select Company</label></label>
                                                     <select name="company" class="form-control">
                                                         @foreach($comp1 as $dit)
                                                        <option value="{{$dit['id']}}">
                                                            {!!$dit['organization_name']!!}
                                                            
                                                        </option> 
                                                         @endforeach
                                                     </select>
                                                     
                                                     </div>       
                                                     
                                                <div class="form-row">
                                                  	
                                                    <div class="form-group col-md-4">
                                                        <label for="first-name">First Name</label>
                                                        {{ Form::open(['route' => 'employee.store', 'files' => true,'role'=>'form']) }}
                                                        <input type="text" class="form-control" id="first-name" name="fname" required>
    
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="middle-name">Middle Name</label>
                                                        <input type="text" class="form-control" id="first-name"  name="mname" required> 
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="last-name">Last Name</label>
                                                        <input type="text" class="form-control" id="last-name"  name="lname" required>
                                                    </div>
                                                    
                                                </div>
                                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Date of Birth</label>
                                                        <input type="text" id="disp_week" class="form-control" placeholder=""  name="dob" required>
                                                    </div>
                                                                
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Gender</label>
                                                        <select id="inputState" class="form-control" name="gender" required>
                                                            <option selected value="female">Female </option>
                                                            <option value="male">Male</option>
                                                        </select>
                                                    </div>
                                                                <div class="form-group col-md-4">
                                                        <label for="inputState">Residential Status</label>
                                                        <select id="inputState" class="form-control"  name="resident" required>
                                                            <option selected  value="resident">Resident </option>
                                                            <option value="non resident">Non Resident</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                            
                                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="first-name">ID / Passport No.</label>
                                                        <input type="text" class="form-control" id="first-name"  name="idnumber" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="middle-name">KRA PIN</label>
                                                        <input type="text" class="form-control" id="first-name"  name="kra" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="last-name">NSSF No. </label>
                                                        <input type="text" class="form-control" id="last-name"  name="nssf" required>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">NHIF No.</label>
                                                        <input type="text" id="date-format" class="form-control" placeholder=""  name="nhif" required>
                                                    </div>
                                                                
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Marital Status</label>
                                                        <select id="inputState" class="form-control" name="marital" required>
                                                            <option selected value="married">Married </option>
                                                            <option value="single">Single</option>
                                                        </select>
                                                    </div>
                                                </div>
															</div>
                                                
                                     
                                                  
                                                    <div id="step-2">
                                                        
                                          
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="employee-number">Employee No.</label>
                                                        <input type="text" class="form-control" id="first-name"  name="empnumber" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="job-title">Job Title</label>
                                                        <input type="text" class="form-control" id="job-title"  name="job" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Employment Type</label>
                                                        <select id="inputState" class="form-control" name="emptype" required>
                                                            <option selected value="Regular - Open">Regular - Open </option>
                                                            <option value=">Regular - Fixed term">Regular - Fixed term</option>
                                                            <option value="Consultant">Consultant</option>
                                                            <option value="Probation">Probation</option>
                                                            <option value="Intern">Intern</option>
                                                            <option value="Casual">Casual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Date of Employment</label>
                                                        <input type="text" id="date-format" class="form-control" placeholder=""  name="emp_date" required>
                                                    </div>
                                                                
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Department</label>
                                                        <select id="inputState" class="form-control" name="department" required>
                                                            <option selected value="administration">Administration </option>
                                                            <option value="sales">Sales</option>
                                                            <option value="accounts">Accounts</option>
                                                        </select>
                                                    </div>
                                                                <div class="form-group col-md-4">
                                                        <label for="inputState">Region</label>
                                                        <select id="inputState" class="form-control" name="region" required>
                                                            <option selected value="head office" >Head Office </option>
                                                            <option value="site 1">Site 1</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                             
                                                        
                                                    </div>
                                                    <div id="step-3">
                                          
                                                    <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="salary">Salary (KES) </label>
                                                        <input type="text" class="form-control" id="account-name" name="salary" required>
                                                    </div>
                                                    
                                                </div>        
                                                   
                                                        <h5>Bank Information</h5>
                                                        <hr>
                                                  <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="account-name">Account Name</label>
                                                        <input type="text" class="form-control" id="account-name"  name="accname" placeholder="***optional***">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="account-number">Account No.</label>
                                                        <input type="text" class="form-control" id="account-number" name="accnumber"  placeholder="***optional***">
                                                    </div>
                                                </div>
                                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="bank-name">Bank Name</label>
                                                        <input type="text" class="form-control" id="bank-name" name="bankname"  placeholder="***optional***">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="bank-branch">Bank Branch</label>
                                                        <input type="text" class="form-control" id="bank-branch" name="bankbranch"   placeholder="***optional***">
                                                    </div>
                                                    
                                                </div>
                                          
                                            <h5>Deductions</h5>
                                                        <hr>
                                                        
                                                    
                                                       <!-- <div class="form-group d-inline">
                                                        <div class="checkbox checkbox-info checkbox-fill d-inline">
                                                            <input type="checkbox" name="ns1" id="checkbox-i-infill-1" checked value="nhif" required>
                                                            <label for="checkbox-i-infill-1" class="cr">NHIF</label>
                                                        </div>
                                                    </div>-->
                                                   <!-- <div class="form-group d-inline">
                                                        <div class="checkbox checkbox-info checkbox-fill d-inline">
                                                            <input type="checkbox" name="ns2" id="checkbox-i-infill-2" value="nssf" required>
                                                            <label for="checkbox-i-infill-2" class="cr">NSSF</label>
                                                        </div>
                                                    </div>-->
                                                  
                                                        
                                                    </div>
                                                    <div id="step-4">
                                                        <h5>Employee contacts</h5>
                                                        <hr>
                                                  
                                                <div class="form-row">
                                                    <div class="form-group col-md-7">
                                                        <label for="email">Personal Email</label>
                                                        <input type="text" class="form-control" id="email" name="email" required>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="phone-number">Personal Phone No.</label>
                                                        <input type="text" class="form-control" id="phone-number" name="phone" required>
                                                    </div>
                                                    
                                                </div> 
                                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="first-name">Postal Address</label>
                                                        <input type="text" class="form-control" id="first-name" name="postal" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="last-name">Residential Address</label>
                                                        <input type="text" class="form-control" id="last-name" name="resaddress" required>
                                                    </div>
                                                </div>
                                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-7">
                                                        <label for="email">Official Email</label>
                                                        <input type="text" class="form-control" id="email" name="official_email" required>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="phone-number">Official Phone No.</label>
                                                        <input type="text" class="form-control" id="phone-number" name="official_phone" required>
                                                    </div>
                                                    
                                                </div>
                                                            
   
                                       
                                                        <h5>Next of Kin contacts</h5>
                                                        <hr>
                                                    
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="first-name">First Name</label>
                                                        <input type="text" class="form-control" id="first-name" name="kname"  placeholder="***optional***" >
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="last-name">Last Name</label>
                                                        <input type="text" class="form-control" id="last-name" name="klast"  placeholder="***optional***">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="relation">Relation</label>
                                                        <input type="text" class="form-control" id="relation" name="relation"  placeholder="***optional***" >
                                                    </div>
                                                    
                                                </div>
                                                            
                                                <div class="form-row">
                                                    <div class="form-group col-md-7">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control" id="email" name="k_email"  placeholder="***optional***" >
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="phone-number">Phone No.</label>
                                                        <input type="text" class="form-control" id="phone-number" name="k_phone"  placeholder="***optional***">
                                                    </div>
                                                    
                                                </div>
                                                     	<button class="btn btn-primary btn-block mb-15" type="submit">Save</button>       
   
                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Smart-Wizard ] end -->

                  

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>




@endsection






