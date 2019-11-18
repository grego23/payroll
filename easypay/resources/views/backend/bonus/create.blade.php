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
                                        <h5 class="m-b-10">Bonuses </h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="organizations.html">Bonus</a></li>
                                        <li class="breadcrumb-item"><a href="company-info.html">Add Bonus</a></li>
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
            @if ($message = Session::get('error'))
        <div class="alert alert-danger">
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
<tr role="row"><th>Employee I.D</th><th>Reason</th><th>Amount</th><th>Month</th>
<th>X</th><th>X</th><th>X</th>
</tr>
</thead>
<tbody>
@foreach($comp as $info)
<tr role="row" class="odd">
<td class="sorting_1">{{$info->employee_id}}</td>
<td class="sorting_1">{{$info->reason}}</td>
<td class="sorting_1">{{$info->amount}}</td>
<td>{{$info->month}}</td>
<td>  <form action="{{ route('bonus.show',$info->id) }}" method="POST">

<a class="btn btn-primary" href="{{ route('bonus.show',$info->id) }}"><i class="feather icon-eye"></i>View</a>

@csrf

</form></td>
<td> <form action="{{ route('bonus.edit',$info->id) }}" method="POST">

<a class="btn btn-success" href="{{ route('bonus.edit',$info->id) }}"><i class="feather icon-edit"></i>Edit</a>

@csrf

</form>
                                                </td>
<td><form action="{{ route('bonus.destroy', $info->id)}}" method="post">
   @method('DELETE')
   @csrf
   <button class="btn btn-danger" type="submit"> <i class="feather icon-trash"></i>Delete</button>
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
        <h4 class="modal-title">Add Bonus</h4>
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
									 {{ Form::open(['route' => 'bonus.store', 'files' => true,'role'=>'form']) }}
                                       
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Select Employee Number</label>
                                                            <select name="emp_number" class="form-control">
                                                                @foreach($emp as $emps)
                                                             
                                                                <option value="{{$emps['employee_number']}}">{{$emps['employee_number']}}</option>
                                                @endforeach                
                                                @error('employee_number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $validator }}</strong>
    </span>
@enderror
                                                                
                                                            </select>
                                                  
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Reason for bonus?</label>
                                                            <input type="text" class="form-control" name="reason" placeholder="reason" id="kra">
                                                            @error('reason')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $validator }}</strong>
    </span>
@enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Amount</label>
                                                            <input type="text" class="form-control" name="amount" placeholder="amount" id="kra">
                                                            @error('amount')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $validator }}</strong>
    </span>
@enderror
                                                        </div>
                                                    </div>
                                               
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Month</label>
                                                            
                                                            {!! Form::text('month',null,['class' => 'form-control','id'=>'datepicker4']) !!}
                                                            @error('month')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $validator }}</strong>
    </span>
@enderror
                                                        </div>
                                                    </div>
                                                  
                                              
                                             
                                         
                                                    
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-primary" >Submit</button>
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






