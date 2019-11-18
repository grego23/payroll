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
                                        <h5 class="m-b-10">Deductions </h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="organizations.html">Deductions</a></li>
                                        <li class="breadcrumb-item"><a href="company-info.html">Add Deductions</a></li>
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
            @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
  
             
                                </div>
								
								   <div class="col-md-12 col-xl-12">
                                    <div class="card user-card">
                                        <div class="card-block">
										<button  class="btn btn-primary"  data-toggle="modal" data-target="#myModal"><i class="feather icon-edit"></i>Add new Record</button>
                                                                    <table id="zero-configuration" class="display table nowrap table-bordered table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr role="row"><th>Salary</th><th>Personal Relief</th><th>Pension Fund</th>
<th>Nhif</th><th>X</th><th>X</th><th>X</th>
</tr>
</thead>
<tbody>
@foreach($comp as $info)
<tr role="row" class="odd">

<td class="sorting_1">{{$info->salary}}</td>
<td class="sorting_1">{{$info->personal_relief}}</td>
<td>{{$info->pension_fund}}</td>

<td>{{$info->nhif_deduction}}</td>
<td>  <form action="{{ route('deduction.show',$info->id) }}" method="POST">

<a class="btn btn-primary" href="{{ route('deduction.show',$info->id) }}"><i class="feather icon-eye"></i>View</a>

@csrf

</form></td>
<td> <form action="{{ route('deduction.edit',$info->id) }}" method="POST">

<a class="btn btn-success" href="{{ route('deduction.edit',$info->id) }}"><i class="feather icon-edit"></i>Edit</a>

@csrf

</form>
                                                </td>
<td><form action="{{ route('deduction.destroy', $info->id)}}" method="post">
   @method('DELETE')
   @csrf
   <button class="btn btn-danger" type="submit"> <i class="feather icon-trash"></i>Delete</button>
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
<div class="modal fade" id="myModal"  >
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px; !important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Deductions</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
        <!-- [ Form Validation ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="writeinfo"></div>   
                                        </div>
                                        <div class="card-block">
									 {{ Form::open(['route' => 'deduction.store', 'files' => true,'role'=>'form']) }}
                                       
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Select Employee Number</label>
                                                            <select name="emp_number" class="form-control">
                                                                @foreach($emp as $emps)
                                                             
                                                                <option value="{{$emps['employee_number']}}">{{$emps['employee_number']}}</option>
                                                @endforeach                
                                                                
                                                                
                                                            </select>
                                                  
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Personal Relief</label>
                                                            <input type="text" class="form-control" name="p_relief" placeholder="personal relief" id="kra" required>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Insurance Relief</label>
                                                            <input type="text" class="form-control" name="insurance" placeholder="insurance relief" id="postal"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Allowable Pension Fund</label>
                                                            <input type="text" class="form-control" name="pension" placeholder="pension fund" id="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Allowable HOSP Contribution</label>
                                                            <input type="text" class="form-control" name="hosp" placeholder="Allowable HOSP" id="phone" required >
                                                        </div>
                                                    </div>
                                                       <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Owner Occupier Interest</label>
                                                            <input type="text" class="form-control" name="occupier" placeholder="owner occupier" id="phone" required >
                                                          
                                                        </div>
                                                    </div>
                                                   <!--<div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Tax(%)</label>
                                                  <select name="tax" class="form-control">
                                                      <option value="10"> 10%  (0 - 12,298)</option>
                                                        <option value="15"> 15%  (12,299 - 23,885)</option>
                                                          <option value="20"> 20%  (23,886 - 35,472)</option>
                                                            <option value="25"> 25% (35,473 - 47,059)</option>
                                                  <option value="30"> 30% (above 47,059)</option>
                                                                        
                                                  </select>
                                                        </div>
                                                    </div>-->
                                           
                                             <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nhif</label>
                                                            <select name="nhif" class="form-control">
                                                                    <option value="150">up to 5,999</option>
                                                      <option value="300">6,000 - 7,999</option>
                                                      
                                                  <option value="400">8,000 - 11,999</option>
                                                      <option value="500">12,000 - 14,999</option>
                                                      
                                                  <option value="600">15,000 - 19,999</option>
                                                        <option value="700">20,000 - 24,999</option>
                                                      
                                                  <option value="850"> 25,000- 29,999</option>
                                                        <option value="900"> 30,000 - 34,999</option>
                                                      
                                                  <option value="950">35,000 - 39,999</option>
                                             <option value="1000">40,000 - 44,999</option>
                                                        <option value="1100">45,000 - 49,999</option>
                                                      
                                                  <option value="1200">50,000 - 59,999</option>
                                                        <option value="1300">60,000 - 69,999</option>
                                                      
                                                  <option value="1400"> 70,000 - 79,999</option>
                                                        <option value="1500"> 80,000- 89,999</option>
                                                      
                                                  <option value="1600"> 90,000 - 99,999</option>
                                                            <option value="1700">100000 and above</option>
                                                  </select>
                                                        </div>
                                                    </div>-->
                                           
                                            
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nssf (Tier Pensionable Pay)</label>
                                                       <select name="nssf" class="form-control">
                                                      <option value="1"> (i) Up to - 6000</option>
                                                      
                                                  <option value="2"> (ii)  6001 - 18000</option>
                                                                        
                                                  </select>
                                                        </div>
                                                    </div>     
                                           <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Disabilty Excemption</label>
                                                            <input type="text" class="form-control" name="disability" placeholder="disability excemption" id="phone" required >
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-primary" >Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Form Validation ] end -->
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


@endsection






