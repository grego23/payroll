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
                                            		<a href="{{URL::to('company/create')}}" class="btn btn-primary"><i class="feather icon-edit"></i><< Back</a>
                                            <div class="container mt-3">
  <h2>View Info</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Items</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">>>></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">>>></a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th>Company Name</th>
<th>Email</th>
<th>Phone</th>
<th>Kra Pin</th>
<th>Physical Address</th>

</tr></thead>
<tbody>
<tr>
<td>
<h6 class="m-0">{{$comp['organization_name']}}</h6>
</td>
<td>
<h6 class="m-0">{{$comp['email']}}</h6>
</td>
<td>
<h6 class="m-0">{{$comp['phone']}}</h6>
</td>
<td>
<h6 class="m-0">{{$comp['kra_pin']}}</h6>
</td>
<td class="m-0">{{$comp['physical_address']}}</td>

</tr>

</tbody>
</table>
<table class="table table-hover">
<thead>
<tr>
<th>Postal Address</th>
<th>Currency</th>
<th>Info</th>
<th>Num Of Employees</th>
<th>X</th>
</tr></thead>
<tbody>
<tr>
<td>
<h6 class="m-0">{{$comp['postal_address']}}</h6>
</td>
<td>
<h6 class="m-0">{{$comp['currency']}}</h6>
</td>
<td>
<h6 class="m-0">{{$comp['info']}}</h6>
</td>
<td class="m-0">{{$comp['num_of_employees']}}</td>
<td></td>
</tr>

</tbody>
</table>
</div>
  
    </div>
  <!--  <div id="menu1" class="container tab-pane fade"><br>
         
      <h3>sfff</h3>
 
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        
      <h3>tyt</h3>

</div>  -->
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






