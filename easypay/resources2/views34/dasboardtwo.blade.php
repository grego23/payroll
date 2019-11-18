
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
                                <div class="col-md-12 col-xl-4">
                                   <a href=""> <div class="card user-card">
                                        <div class="card-block">
                                            <h5 class="m-b-15">Register User</h5>
                                            <h4 class="f-w-300 mb-3">{{$count}}</h4>
                                            <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">20%</label>Monthly Increase</span>
                                        </div> </a>
                                    </div>
                                </div>
                                <!-- [Register-user section] end -->

                                <!-- [Daily-user section] start -->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card user-card">
                                        <div class="card-block">
                                            <h5 class="f-w-400 m-b-15">Daily User</h5>
                                            <h4 class="f-w-300 mb-3">467</h4>
                                            <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">10%</label>Weekly Increase</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- [Daily-user section] end -->

                             
                                <div class="col-md-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Transactions</h5>
                                            <span class="d-block pt-2">Jun 23 - Jul 23</span>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-6">
                                                    <div id="transactions3" class="float-left" style="height:90px;width:80px;margin:0 auto;"></div>
                                                </div>
                                                <div class="col-6">
                                                    <h3 class="f-w-300 mb-0 float-right">$ 59,48</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ Transactions chart ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
   

