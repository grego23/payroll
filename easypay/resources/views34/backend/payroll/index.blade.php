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
                                        <h5 class="m-b-10">Process Payroll</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href=""><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="">Payroll</a></li>
                                        <li class="breadcrumb-item"><a href="">export</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Export Payroll</h5>
</div>
<div class="card-block">
<p>Click any buttons to export the report.</p>
<div class="table-responsive">
<table id="key-act-button" class="display table nowrap table-striped table-hover" style="width:100%">
<thead>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Middle Name</th>
<th>Age</th>
<th>KRA Pin</th>
<th>Salary</th>
</tr>
</thead>
 <tbody>
     @foreach($comp as $info)
<tr>
    
<td> {{$info['first_name']}}</td>
<td>{{$info['last_name']}}</td>
<td>{{$info['middle_name']}}</td>
<td>{{$info['dob']}}</td>
<td>{{$info['kra_pin']}}</td>
<td>{{$info['salary']}}</td>
</tr>
@endforeach


</table>
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











