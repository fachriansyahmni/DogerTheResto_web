@extends('deskapp.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="row clearfix mb-30">
        <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
            <div class="pd-20 card-box">
                <h5 class="h4 text-blue mb-20">Filter</h5>
                <div class="tab">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#harian" role="tab" aria-selected="true">Harian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Bulanan" role="tab" aria-selected="false">Bulanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Tahunan" role="tab" aria-selected="false">Tahunan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Custom" role="tab" aria-selected="false">Custom</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="harian" role="tabpanel">
                            <div class="pd-20">
                                <form action="" method="get">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="text-muted">Tanggal</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" name="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group text-right mt-4 mb-0">
                                        <button class="btn btn-primary" name="day" type="submit">cek</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Bulanan" role="tabpanel">
                            <div class="pd-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Tahunan" role="tabpanel">
                            <div class="pd-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Custom" role="tabpanel">
                            <div class="pd-20">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pd-20 card-box mb-30">
            <h4 class="h4 text-blue">Menu Terlaris Bulan ${bulan}</h4>
            <div id="chart3"></div>
    </div>
    <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Daftar Pesanan</h4>
                        <p class="mb-30">Halaman daftar pesanan</p>
                    </div>
                    <div class="pull-right">
                        <a href="#" data-toggle="modal" data-target="#export">Export</a>
                    </div>
                </div>
    
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Nomor Pesanan</th>
                            <th></th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AllOrders as $Order)
                        <tr>
                            <td class="table-plus">{{$Order}}</td>
                            <td class="table-plus"></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection

@push('script')
	<script src="{{asset('vendor/deskapp/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('vendor/deskapp/vendors/scripts/apexcharts-setting.js')}}"></script>
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
@endpush