@extends('layouts.dashlay2')

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
                                        <h5 class="m-b-10">Process Payroll</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="organizations.html">Payroll</a></li>
                                        <li class="breadcrumb-item"><a href="company-info.html">Payroll</a></li>
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

     
     <div class="row">
     <div class="col-md-4">
     <div class="row">
<div class="col-sm-4">
{{ Form::open(['route' => 'search', 'files' => true,'role'=>'form']) }}
<select class="form-control" name="search">
<option>
--select month --
</option>
<option value="January">
January
</option>
<option value="Febraury">
Febraury
</option>
<option value="March">
March
</option>
<option value="April">
April
</option>
<option value="May">
May
</option>
<option value="June">
June
</option>
<option value="July">
July
</option>
<option value="August">
August
</option>
<option value="September">
September
</option>
<option value="October">
October
</option>
<option value="November">
November
</option>
<option value="December">
December
</option>
</select>
</div>
<div class="col-sm-2">
<input type="submit" class="btn btn-primary"  value="Search Payroll">
</form>
</div>
</div>
     </div>
     <div class="col-md-4">

     </div>
     <div class="col-md-4">
     <div class="row">
 <div class="col-sm-6">
 {{ Form::open(['route' => 'processroll', 'files' => true,'role'=>'form']) }}
     <input id="NoIconDemo" type="text"  placeholder="month" name="search" class="form-control"/>
  </div>
  <div class="col-sm-6">
     <input type="submit" class="btn btn-primary"  value="Process Payroll">
     </div>
  </div>
     </div>
     </div>

             
								   <div class="col-md-12 col-xl-12">
                                    <div class="card user-card" style="overflow-x:scroll;">
                                        <div class="card-block">
									<!--	<a class="btn btn-success" href="{{URL::to('processall') }}" style="width:30%;"><i class="feather icon-settings"></i>Process Company Payroll </a>-->
							 <table id="zero-configuration" class="display table nowrap table-bordered table-hover dataTable" style="width: 100%; overflow-x:scroll;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr role="row"><th><input type="checkbox" class="selectall" /> Select All <br><th>First Name </th><th>Lastname</th><th>Salary</th><th>Taxed Sal</th>
<th>Personal Relief</th><th>Insurance  Relief</th><th>Pension Fund</th><th>Hosp</th><th>Occupier Interest</th><th>Disability Excemption</th>
<th>Nhif Deduction</th>
<th>Nssf Deduction</th>
<th>Employee Id</th>
<th>Bonus</th>
<th>X</th>
</tr>
</thead>
<tbody>

@foreach($comp as $info)

<tr role="row" class="odd">
<td><input type="checkbox" class="case" name="case[]" value="{{$info->id}}" onclick="myfunc(this);"/></td>

<td class="sorting_1">{{$info->first_name}}</td>
<td class="sorting_1">{{$info->last_name}}</td>
<td>{{$info->salary}}</td>
<td>{{$info->taxsal}}</td>

<td>{{$info->personal_relief}}</td>
<td>{{$info->insurance_relief}}</td>
<td>{{$info->pension_fund}}</td>
<td>{{$info->hosp}}</td>
<td>{{$info->occupier_interest}}</td>
<td>{{$info->disability_excemption}}</td>
<td>{{$info->nhif_deduction}}</td>
<td>{{$info->nssf_deduct}}</td>
<td>{{$info->emp_id}}</td>
<td>{{$info->amount}}</td>
<td> <a href="" class="btn btn-primary"><i class="feather icon-eye"></i> View Payslip</a></td>
</tr>
@endforeach
</tbody>

</table>
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


	
	
<!-- The Modal -->
<div class="modal fade" id="position">
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px; !important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Search Payroll5765</h4>
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
							 <form method="POST" action="{{ route('payview') }}">
                        @csrf
                                       
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Month</label>
                                                 {!! Form::selectMonth('month',null,['class' => 'form-control']) !!}
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Year</label>
                                                            {!! Form::selectRange('year', 1960, 2019,null,['class' => 'form-control']) !!}
                                                        </div>
                                                    </div>
                                                    </div>
                                               
                                                    
                                                    <input type="submit" class="btn btn-primary"  value="Submit">
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






