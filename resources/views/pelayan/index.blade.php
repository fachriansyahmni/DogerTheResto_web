@extends('deskapp.dashboard')

@section('main-content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="{{asset('vendor/deskapp/vendors/images/banner-img.png')}}" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                Welcome back <div class="weight-600 font-30 text-blue">{{Auth::user()->name}}</div>
            </h4>
            <p class="font-18 max-width-600"></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-lg-8">
        <div class="card-deck mb-30">
            <div class="card card-box text-center">
                <div class="card-body">
                    <h5 class="card-title">Total Pesanan Selesai</h5>
                    <p class="card-text">{{count(App\Pesanan::where("status_pesanan","=","lunas")->orWhere("status_pesanan","=","selesai")->get())}}</p>
                    <p class="card-text"><small class="text-muted">Hari Ini</small></p>
                </div>
            </div>
            <div class="card card-box text-center">
                <div class="card-body">
                    <h5 class="card-title">Total Pesanan Menunggu</h5>
                    <p class="card-text">{{count(App\Pesanan::where("status_pesanan","!=","lunas")->Where("status_pesanan","!=","selesai")->get())}}</p>
                    <p class="card-text"><small class="text-muted">Hari Ini</small></p>
                </div>
            </div>
        </div>
        @if (count($OrderReady) > 0)
        <div class="alert alert-danger" role="alert">
            Terdapat <b>{{count($OrderReady)}} Pesanan Siap Diantar!</b>
        </div>
        <div class="card mb-30">
            <div class="card-body">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Daftar Pesanan Siap Antar</h4>
                        <p class="mb-30">Halaman daftar pesanan</p>
                    </div>
                </div>
    
               <div class="table-responsive">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th>Nomor Pesanan</th>
                            <th class="">No Meja</th>
                            <th class="">Status</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($OrderReady as $order)   
                        <tr class="list_pesanan" data-pid="{{$order->id}}">
                            <td>{{$order->id}}</td>
                            <td>{{$order->nomor_meja}}</td>
                            <td>{{$order->status_pesanan}}</td>
                            <td>
                                <form action="{{route('change-process',$order->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="Selesai" name="status">
                                    <button class="btn btn-success" type="submit">Selesai Diantar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
    
                    </tbody>
                </table>
               </div>
            </div>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Daftar Pesanan</h4>
                        <p class="mb-30">Halaman daftar pesanan</p>
                    </div>
                </div>
    
               <div class="table-responsive">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus">Nomor Pesanan</th>
                            <th class="">Total Menu</th>
                            <th class="">Tanggal Pesan</th>
                            <th class="">Status</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AllOrders as $order)   
                        <tr class="list_pesanan" data-pid="{{$order->id}}">
                            <td class="table-plus">{{$order->id}}</td>
                            <td>{{count($order->pesananItems)}}</td>
                            <td>{{$order->tglpesan}}</td>
                            <td>{{$order->status_pesanan}}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail-{{$order->id}}"><i class="dw dw-eye"></i> detail</a>
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
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Daftar Meja</h4>
                        <p class="mb-30">Halaman daftar meja</p>
                    </div>
                    {{-- <div class="pull-right">
                        <a href="#" data-toggle="modal" data-target="#addMenuKategori">Tambah Kategori</a>
                    </div> --}}
                </div>
    
               <div class="table-responsive">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="">Nomor Meja</th>
                            <th class="">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AllMeja as $Meja)   
                        <tr>
                            <td>{{$Meja->nomor_meja}}</td>
                            <td>@if ($Meja->status == 1)
                                <strong class="text-success">Tersedia</strong>
                                @else
                                <strong class="text-danger">Tidak Tersedia</strong>
                            @endif</td>
                        </tr>
                        @endforeach
    
                    </tbody>
                </table>
               </div>
            </div>
        </div>
    </div>
</div>

@foreach ($AllOrders as $order)   
<div class="modal fade bs-example-modal-lg" id="detail-{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Details Pesanan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="">Menu</th>
                            <th class="">Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->pesananItems as $itemPesanan)   
                        <tr>
                            <td>{{$itemPesanan->dMenu->nama}}</td>
                            <td>{{$itemPesanan->qty}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex flex-column mt-4">
                    <div class="mb-2">
                        Total Harga : {{$order->total_harga}}
                    </div>
                    <div class="">
                        Pelayan : @isset($record)
                        {{$order->Pelayan->name}}
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection


@push('script')
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
@endpush