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
                                        <h5 class="m-b-10">Position Information</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="organizations.html">Position</a></li>
                                        <li class="breadcrumb-item"><a href="company-info.html">Add Position</a></li>
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
										<button  class="btn btn-primary"  data-toggle="modal" data-target="#position">Add new Record</button>
                                                                    <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
<thead>
<tr role="row"><th>Title</th><th>Rate</th><th>X</th><th>X</th>
</tr>
</thead>
<tbody>
@foreach($comp as $info)
<tr role="row" class="odd">

<td class="sorting_1">{{$info['title']}}</td>
<td class="sorting_1">{{$info['rate']}}</td>
<td> <form action="{{ route('position.edit',$info->id) }}" method="POST">

<a class="btn btn-success" href="{{ route('position.edit',$info->id) }}">Edit</a>

@csrf

</form>
                                                </td>
<td><form action="{{ route('position.destroy', $info->id)}}" method="post">
   @method('DELETE')
   @csrf
   <input class="btn btn-danger" type="submit" value="Delete" />
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
<div class="modal fade" id="position">
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px; !important;">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Position Information</h4>
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
										<form  id="employee validation-form123"  role="form">
                                       
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Add Position</label>
                                                            <input type="text" class="form-control" name="validation-text"  id="title" placeholder="e.g XYZ Limited" >
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Rate</label>
                                                            <input type="text" class="form-control" name="validation-text" placeholder="e.g P123456789Z" id="rate">
                                                        </div>
                                                    </div>
                                                    </div>
                                               
                                                    
                                                    <button type="submit" class="btn btn-primary"  id="sub">Submit</button>
                                            </form>
                                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function() {
                                    window.addEventListener('load', function() {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName('needs-validation');
                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(forms, function(form) {
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        });
                                    }, false);
                                })();
                            </script>
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






