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
										<button  class="btn btn-primary"  data-toggle="modal" data-target="#myModal"><i class="feather icon-edit"></i>Add new Record</button>
                                                                    <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr role="row"><th>Organization</th><th>Email</th><th>KRA PIN</th><th>Physical Address</th>
<th>Phone</th><th>X</th><th>X</th><th>X</th>
</tr>
</thead>
<tbody>
@foreach($comp as $info)
<tr role="row" class="odd">

<td class="sorting_1">{{$info['organization_name']}}</td>
<td class="sorting_1">{{$info['email']}}</td>
<td>{{$info['kra_pin']}}</td>
<td>{{$info['physical_address']}}</td>

<td>{{$info['phone']}}</td>
<td>  <form action="{{ route('company.show',$info->id) }}" method="POST">

<a class="btn btn-primary" href="{{ route('company.show',$info->id) }}"><i class="feather icon-eye"></i>View</a>

@csrf

</form></td>
<td> <form action="{{ route('company.edit',$info->id) }}" method="POST">

<a class="btn btn-success" href="{{ route('company.edit',$info->id) }}"><i class="feather icon-edit"></i>Edit</a>

@csrf

</form>
                                                </td>
<td><form action="{{ route('company.destroy', $info->id)}}" method="post">
   @method('DELETE')
   @csrf
   <button class="btn btn-danger" type="submit"> <i class="feather icon-slash"></i>Delete</button>
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
        <h4 class="modal-title">Organization Information</h4>
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
										<form id="employee" role="form">
                                       
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Organization's Registered Name</label>
                                                            <input type="text" class="form-control" name="orgnization"  id="organization" placeholder="e.g XYZ Limited" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">KRA PIN</label>
                                                            <input type="text" class="form-control" name="kra" placeholder="e.g P123456789Z" id="kra" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Physical Address</label>
                                                            <input type="text" class="form-control" name="addressone" placeholder="e.g Senteu Plaza Nairobi" id="addressone" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Postal Address</label>
                                                            <input type="text" class="form-control" name="postal" placeholder="e.g P.O Box 123 - 0000 Nairobi" id="postal"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Email</label>
                                                            <input type="text" class="form-control" name="email" placeholder="e.g admin@xyz.com" id="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" name="phone" placeholder="e.g 254700000000" id="phone" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Currency</label>
                                                            <select class="form-control" name="currency" id="currency" required >
                                                                <option value>Select currency</option>
                                                                <optgroup label="Payroll Currency">
                                                                    <option value="KES">KES</option>
                                                                    <option value="USD">USD</option>
                                                                    <option value="EURO">Euro</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Any 0ther information</label>
                                                            <textarea class="form-control" name="info"  id="info" required ></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Number of employees</label>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="employee" value="1-10" id="emp"  > 1 - 10
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="employee" value="11-50" id="emp"> 11-50
                                                                </label>
                                                            </div>
                                                            <div class="form-check disabled">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="employee" value="51-100" id="emp" > 51-100
                                                                </label>
                                                            </div>
                                                            <div class="form-check disabled">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="employee" value="Above 100" id="emp"> Above 100
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-primary"  id="submit" data-dismiss="modal" >Submit</button>
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






