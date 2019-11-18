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
                        	<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="open">Open Modal</button>
    <form method="post" action="" id="form">
        @csrf
  <!-- Modal -->
  <div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="alert alert-danger" style="display:none"></div>
      <div class="modal-header">
      	
        <h5 class="modal-title">Uefa Champion League</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-4">
              <label for="Name">Name:</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
          </div>
          <div class="row">
              <div class="form-group col-md-4">
                <label for="Club">Club:</label>
                <input type="text" class="form-control" name="club" id="club">
              </div>
          </div>
          <div class="row">
             <div class="form-group col-md-4">
                <label for="Country">Country:</label>
                <input type="text" class="form-control" name="country" id="country">
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <label for="Goal Score">Goal Score:</label>
              <input type="text" class="form-control" name="score" id="score">
            </div>
          </div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-success" id="ajaxSubmit">Save changes</button>
        </div>
    </div>
  </div>
</div>
  </form>
</div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	
	




@endsection








