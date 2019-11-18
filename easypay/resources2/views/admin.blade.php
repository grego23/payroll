
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
                                    <div class="card user-card">
                                        <div class="card-block">
                                            <h5 class="m-b-15">Registered Organizations</h5>
                                            <h4 class="f-w-300 mb-3">{{$count}}</h4>
                                            <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">{{$count}}%</label>Monthly Increase</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- [Register-user section] end -->

                                <!-- [Daily-user section] start -->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card user-card">
                                        <div class="card-block">
                                            <h5 class="f-w-400 m-b-15">Registered Employees </h5>
                                            <h4 class="f-w-300 mb-3">{{$emp}}</h4>
                                            <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">{{$emp}}%</label>Weekly Increase</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- [Daily-user section] end -->

                                <!-- [Premium-user section] start -->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card user-card">
                                        <div class="card-block">
                                            <h5 class="f-w-400 m-b-15">Premium Users</h5>
                                            <h4 class="f-w-300 mb-3">{{$users}}</h4>
                                            <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">0%</label>Yearly Increase</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- [Premium-user section] end -->

                                <!-- [Active-visitor section] start -->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card Active-visitor">
                                        <div class="card-block text-center">
                                            <h5 class="mb-3">Active Users</h5>
                                            <i class="fas fa-user-friends f-30 text-c-green"></i>
                                            <h2 class="f-w-300 mt-3">0</h2>
                                            <span class="text-muted">Active Visit On Sites</span>
                                            <div class="progress mt-4 m-b-40">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 75%; height:7px;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> <br>
                                            <div class="row card-active">
                                                <div class="col-md-4 col-6">
                                                    <h4>0%</h4>
                                                    <span class="text-muted">Desktop</span>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <h4>0%</h4>
                                                    <span class="text-muted">Mobile</span>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <h4>0%</h4>
                                                    <span class="text-muted">Tablet</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [Active-visitor section] end -->

                                <!-- [ payments-section] start -->
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
                                            
                                            <i class="fas fa-money-check f-80 text-c-green"></i> <br> <br> <br>
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-6">
                                                    <h3 class="f-w-300 mb-0 float-left">Ksh.0.00</h3>
                                                </div>
                                                <div class="col-6">
                                                    <div id="transactions" class="float-right" style="height:90px;width:80px;margin:0 auto;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ payments-section] end -->

                                <!-- [ visitor section ] start -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card theme-bg visitor">
                                        <div class="card-block text-center">
                                            <img class="img-female" src="assets/images/user/user-1.png" alt="visitor-user">
                                            <h5 class="text-white m-0">TOTAL VISITORS</h5>
                                            <h3 class="text-white m-t-20 f-w-300">335</h3>
                                            <span class="text-white">12% More than last Month</span>
                                            <img class="img-men" src="assets/images/user/user-2.png" alt="visitor-user">
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col">
                                                    <i class="feather icon-shopping-cart f-30 text-c-green"></i>
                                                    <h6 class="m-t-50 m-b-0">Today's Registrations</h6>
                                                </div>
                                                <div class="col text-right">
                                                    <h3 class="text-c-green f-w-300">0</h3>
                                                    <span class="text-muted d-block">New Registrations</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ visitor section ] end -->

                                
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
   
