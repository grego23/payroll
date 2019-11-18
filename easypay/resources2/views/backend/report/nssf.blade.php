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
                                        <h5 class="m-b-10">Process Nssf Report</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="organizations.html">Nssf</a></li>
                                        <li class="breadcrumb-item"><a href="company-info.html">Report</a></li>
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
                                        <div class="col-md-4">
                                       <h3><small class="label theme-bg text-white f-12 f-w-900"> Date:{{$date}}</small></h3>
                                        </div>
                                        <div class="col-md-4">
                                        <a class="btn btn-success" href="{{URL::to('get_nssf_report_pdf') }}" style=""><i class="feather icon-settings"></i>Process Nssf Report</a>
                                        </div>
                                        <div class="col-md-4">
                                        <a class="btn btn-primary" href="{{URL::to('exportnssf') }}" style=""><i class="feather icon-download"></i>Download Excel Nssf Report</a>
                                        </div>
                                        </div>
							 <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr>  <th colspan="3">Total Amount &nbsp;<span class="label theme-bg text-white f-12 f-w-800">KES {{$total}}.0</span></th><th colspan="3">Total Employees &nbsp;<span class="label theme-bg text-white f-12 f-w-800">{{$count}}</span></th></tr>
<tr role="row"><th>First Name </th><th>Middle Name </th><th>LastName</th><th>Idnumber</th>
<th>Nssf Number</th><th>Amount</th>
</tr>
</thead>
<tbody>
@foreach($data as $info)
<tr role="row" class="odd">

<td class="sorting_1">{{$info->first_name}}</td>
<td class="sorting_1">{{$info->last_name}}</td>
<td>{{$info->middle_name}}</td>
<td>{{$info->id_number}}</td>

<td>{{$info->nssf}}</td>

<td>{{$info->nssf}}.00</td>

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
<div class="modal fade" id="position">
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px; !important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Search Payroll</h4>
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






