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
                                <form action="/cashier/filter" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="text-muted">Tanggal</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" name="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group text-right mt-4 mb-0">
                                        <button class="btn btn-primary" name="btn" value="day" type="submit">cek</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Bulanan" role="tabpanel">
                            <div class="pd-20">
                                <form action="/cashier/filter" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="text-muted">Bulanan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="month" name="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group text-right mt-4 mb-0">
                                        <button class="btn btn-primary" name="btn" value="month" type="submit">cek</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Tahunan" role="tabpanel">
                            <div class="pd-20">
                                <form action="/cashier/filter" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="text-muted">Tahunan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="year" name="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group text-right mt-4 mb-0">
                                        <button class="btn btn-primary" name="btn" value="year" type="submit">cek</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Custom" role="tabpanel">
                            <div class="pd-20">
                                <form action="/cashier/filter" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="text-muted">Tanggal Awal</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" name="date1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="text-muted">Tanggal Akhir</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" name="date2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group text-right mt-4 mb-0">
                                        <button class="btn btn-primary" name="btn" value="custom" type="submit">cek</button>
                                    </div>
                                </form>
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
                            <th class="table-plus datatable-nosort">Tanggal Pesan</th>
                            <th>Total Harga</th>
                            <th>Status Nota</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AllOrders as $Order)
                        <tr>
                            <td class="table-plus">{{$Order->tgl_pesan}}</td>
                            <td class="table-plus">{{ $Order->total_harga }}</td>
                            <td class="table-plus">{{ $Order->status_nota }}</td>
                            <td>
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="Medium-modal">View</a>
                            </td>
                        </tr>

                        {{-- modal view --}}
                        <div class="modal fade show" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: block; padding-right: 17px;" aria-modal="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Detail Pemesanan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <tr>
                                            <th>Nomor Pesanan</th>
                                            <th>Total Harga</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Status Nota</th>
                                        </tr>
                                        <tr>
                                            <td>{{ $Order->nomor_pesanan }}</td>
                                            <td>{{ $Order->total_harga }}</td>
                                            <td>{{ $Order->tgl_pesan }}</td>
                                            <td>{{ $Order->tgl_bayar }}</td>
                                            <td>{{ $Order->status }}</td>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        </div>
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