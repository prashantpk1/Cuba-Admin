@extends('Admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ translate('dashboard') }}</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">
                                <svg class="stroke-icon">
                                    <use href="{{ static_asset('admin/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">{{ translate('dashboard') }}</li>
                        <li class="breadcrumb-item active">{{ translate('dashboard') }} </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row widget-grid">
            <div class="col-sm-2">
                <a href="#">
                    <div class="card small-widget">
                        <div class="card-body success"><span class="f-light">{{ translate('total_customer') }}</span>
                            <div class="d-flex align-items-end gap-1">
                                <span class="font-success f-12 f-w-500">
                                    <span>
                                        <!-- <h4>{{ $customers }}</h4> -->
                                        <h4>6</h4>
                                    </span>
                                </span>
                            </div>
                            <div class="bg-gradient">
                                {{-- <i class="icofont icofont-users" style="font-size: 25px;"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#">
                    <div class="card small-widget">
                        <div class="card-body warning"><span class="f-light">{{ translate('total_service_providers') }}</span>
                            <div class="d-flex align-items-end gap-1">
                                <span class="font-warning f-12 f-w-500">
                                    <span>
                                        <!-- <h4>{{ $subadmin }}</h4> -->
                                        <h4>9</h4>
                                    </span>
                                </span>
                            </div>
                            <div class="bg-gradient">
                                {{-- <i class="icofont  icofont-business-man-alt-2" style="font-size: 25px;"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#">
                    <div class="card small-widget">
                        <div class="card-body secondary"><span class="f-light">{{ translate('total_drives') }}</span>
                            <div class="d-flex align-items-end gap-1">
                                <span class="font-secondary f-12 f-w-500">
                                    <span>
                                        <!-- <h4>{{ $drivers }}</h4> -->
                                        <h4>15</h4>
                                    </span>
                                </span>
                            </div>
                            <div class="bg-gradient">
                                {{-- <i class="icofont  icofont-business-man-alt-2" style="font-size: 25px;"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#">
                    <div class="card small-widget">
                        <div class="card-body secondary"><span class="f-light">{{ translate('total_rides') }}</span>
                            <div class="d-flex align-items-end gap-1">
                                <span class="font-secondary f-12 f-w-500">
                                    <span>
                                        <!-- <h4>{{ $drivers }}</h4> -->
                                        <h4>19</h4>
                                    </span>
                                </span>
                            </div>
                            <div class="bg-gradient">
                                {{-- <i class="icofont  icofont-business-man-alt-2" style="font-size: 25px;"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#">
                    <div class="card small-widget">
                        <div class="card-body secondary"><span class="f-light">{{ translate('total_rides (Umrah & Hajj)') }}</span>
                            <div class="d-flex align-items-end gap-1">
                                <span class="font-secondary f-12 f-w-500">
                                    <span>
                                        <!-- <h4>{{ $drivers }}</h4> -->
                                        <h4>2</h4>
                                    </span>
                                </span>
                            </div>
                            <div class="bg-gradient">
                                {{-- <i class="icofont  icofont-business-man-alt-2" style="font-size: 25px;"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="#">
                    <div class="card small-widget">
                        <div class="card-body secondary"><span class="f-light">{{ translate('total_services') }}</span>
                            <div class="d-flex align-items-end gap-1">
                                <span class="font-secondary f-12 f-w-500">
                                    <span>
                                        <!-- <h4>{{ $drivers }}</h4> -->
                                        <h4>13</h4>
                                    </span>
                                </span>
                            </div>
                            <div class="bg-gradient">
                                {{-- <i class="icofont  icofont-business-man-alt-2" style="font-size: 25px;"></i> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row widget-grid">
            <div class="m-3"><span>{{ translate('last_month_rides') }}</span></div>
            <div class="m-3">
                <img class="" src="{{ static_asset('admin/assets/images/rides.png') }}">
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    <!-- Sidebar jquery-->
    <script src="{{ static_asset('admin/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- <script src="{{ static_asset('admin/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/dashboard/default.js') }}"></script> -->
    
@endsection
