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
                                        <h5 class="m-b-10">View Employees</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="organizations.html">Employees</a></li>
                                        <li class="breadcrumb-item"><a href="company-info.html">Employees Info</a></li>
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
										<!--<button  class="btn btn-primary"  data-toggle="modal" data-target="#mat"><i class="feather icon-edit"></i>Add new Record</button>-->
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






@endsection






