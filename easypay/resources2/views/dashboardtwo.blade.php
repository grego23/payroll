
@extends('layouts.dashlay')

@section('content')

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Dashboard</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
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
                                <!-- [Register-user section] start -->
                                <div class="col-md-12 col-xl-6">
                                    <div class="card user-card">
                                        <div class="card-block">
                                            <h4 class="m-b-15">Registered Organizations</h4>
                                            <hr>
                                            
                                            <span class="pcoded-micon"><i class="feather icon-users" style="font-size:35px;margin:15px;"></i></span><span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">{{$count}}</label></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- [Register-user section] end -->

                                <!-- [Daily-user section] start -->
                                <div class="col-md-6 col-xl-6">
                                    <div class="card user-card">
                                        <div class="card-block">
                                            <h4 class="f-w-400 m-b-15">Registered Employees </h4>
                                            <hr>
                                      
                                           <span class="pcoded-micon"><i class="feather icon-users" style="font-size:35px;margin:15px;"></i></span> <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">{{$emp}}</label></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- [Daily-user section] end -->

                                <!-- [Premium-user section] start -->
                         
                                <!-- [Premium-user section] end -->

                        
                                <!-- [Active-visitor section] end -->

                                <!-- [ payments-section] end -->

                                <!-- [ visitor section ] start -->
                            
                                <!-- [ visitor section ] end -->
                                    <div class="col-md-12 col-xl-12">
                                 
                                                         <div class="card user-card">
									<div class="card-block">
									     <h4 class="m-b-15">Latest Employee Registrations</h4>
									     <hr>
                                                                    <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr role="row"><th>First Name </th><th>Email</th><th>KRA PIN</th><th>Physical Address</th>
<th>Phone</th><th>X</th><th>X</th>
</tr>
</thead>
<tbody>
@foreach($comp as $info)
<tr role="row" class="odd">

<td class="sorting_1">{{$info['first_name']}}</td>
<td class="sorting_1">{{$info['p_email']}}</td>
<td>{{$info['kra_pin']}}</td>
<td>{{$info['residential_address']}}</td>

<td>{{$info['phone']}}</td>
<td> <form action="{{ route('employee.edit',$info->id) }}" method="POST">

<a class="btn btn-success" href="{{ route('employee.edit',$info->id) }}"> <i class="feather icon-edit"></i>Edit</a>

@csrf

</form>
                                                </td>
<td><form action="{{ route('employee.destroy', $info->id)}}" method="post">
   @method('DELETE')
   @csrf
   <button class="btn btn-danger" type="submit"><i class="feather icon-trash"></i>Delete</button>
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
    </div>
    @endsection
    
   

