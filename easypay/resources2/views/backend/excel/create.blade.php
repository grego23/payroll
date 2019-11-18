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
                                        <h5 class="m-b-10">Import Execel File </h5>
                                    </div>
                                    
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
										<button  class="btn btn-primary"  data-toggle="modal" data-target="#myModal"><i class="feather icon-edit"></i>Import Employees</button>
                            
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
                                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

@csrf

<input type="file" name="file" class="form-control">

<br>

<button class="btn btn-success">Import Employees Data</button>

<a class="btn btn-warning" href="{{ route('export') }}">Export Employees Data</a>

<a class="btn btn-primary" href="template/template.xlsx">Download Export Template </a>

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






