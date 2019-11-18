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
                                        <h5 class="m-b-10">Organization Registration</h5>
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

    <!-- [ breadcrumb ] end -->
    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                                    <div class="alert alert-primary" role="alert">
                                        <p>All registered companies</p>
         
								
                                    </div>
                                    <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr role="row"><th>Organization</th><th>Email</th><th>KRA PIN</th><th>Physical Address</th>
<th>Postal Address</th><th>Phone</th><th>Currency</th>
<th>Info</th><th>Employees</th>

</tr>
</thead>
<tbody>
@foreach($comp as $info)
<tr role="row" class="odd">

<td class="sorting_1">{{$info['organization_name']}}</td>
<td class="sorting_1">{{$info['email']}}</td>
<td>{{$info['kra_pin']}}</td>
<td>{{$info['physical_address']}}</td>
<td>{{$info['postal_address']}}</td>
<td>{{$info['phone']}}</td>
<td>{{$info['currency']}}</td>
<td>{{$info['info']}}</td>
<td>{{$info['num_of_employees']}}</td>
</tr>
@endforeach
</tbody>

</table>
                                    
                                    
                                </div>
                    
                                <!-- [ Form Validation ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection





