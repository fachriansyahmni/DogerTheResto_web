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
        <h4 class="h4 text-blue">Daftar Menu Terjual Hari Ini</h4>
        <div id="chartMenuTerlaris"></div>
    </div>
    <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Daftar Pesanan</h4>
                        <p class="mb-30">Halaman daftar pesanan</p>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-primary" onclick="submitForm()">Export</a> {{-- data-toggle="modal" data-target="#export" --}}
                        @isset($kondisi)
                            @switch($kondisi)
                                @case("day")
                                        <form action="/cashier/export" class="d-none" method="POST" id="formFilter">
                                            @csrf
                                            <input type="text" value="{{ $kondisi }}" name="kondisi" id="">
                                            <input type="text" value="{{ $param1 }}" name="param1">
                                            {{-- <button type="submit">Submit</button> --}}
                                        </form>
                                    @break
                                @case("month")
                                        <form action="/cashier/export" class="d-none" method="POST" id="formFilter">
                                            @csrf
                                            <input type="text" value="{{ $kondisi }}" name="kondisi" id="">
                                            <input type="text" value="{{ $param1 }}" name="param1">
                                            {{-- <button type="submit">Submit</button> --}}
                                        </form>
                                    @break
                                @case("month")
                                        <form action="/cashier/export" class="d-none" method="POST" id="formFilter">
                                            @csrf
                                            <input type="text" value="{{ $kondisi }}" name="kondisi" id="">
                                            <input type="text" value="{{ $param1 }}" name="param1">
                                            {{-- <button type="submit">Submit</button> --}}
                                        </form>
                                    @break
                                @case("year")
                                        <form action="/cashier/export" class="d-none" method="POST" id="formFilter">
                                            @csrf
                                            <input type="text" value="{{ $kondisi }}" name="kondisi" id="">
                                            <input type="text" value="{{ $param1 }}" name="param1">
                                            {{-- <button type="submit">Submit</button> --}}
                                        </form>
                                    @break
                                @case("custom")
                                    <form action="/cashier/export" class="d-none" method="POST" id="formFilter">
                                        @csrf
                                        <input type="text" value="{{ $kondisi }}" name="kondisi" id="">
                                        <input type="text" value="{{ $param1 }}" name="param1">
                                        <input type="text" value="{{ $param2 }}" name="param2">
                                        {{-- <button type="submit">Submit</button> --}}
                                    </form>
                                @break
                                @default
                                    
                            @endswitch
                        @endisset
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
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#detail-{{ $Order->id }}">View</a>
                            </td>
                        </tr>

                        <div class="modal fade bs-example-modal-lg" id="detail-{{ $Order->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Detail List Pesanan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    
                                        <div class="modal-body">
                                                <div class="form-group row">
                                                    <div class="col-sm-12 col-md-10">
                                                            <p style="text-align:justify;">
                                                                <b>Nomor Pesanan</b>
                                                                : 
                                                                {{$Order->nomor_pesanan}}
                                                                
                                                                <br>
    
                                                                <b>Total Harga</b>
                                                                : 
                                                                {{$Order->total_harga}}
                                                                
                                                                <br>
    
                                                                <b>Tanggal pemesanan</b>
                                                                : 
                                                                {{$Order->tgl_pesan}}
                                                                
                                                                <br>
    
                                                                <b>Tanggal Bayar</b>
                                                                : 
                                                                {{$Order->tgl_bayar}}
                                                                
                                                                <br>
                                                                <b>Status</b>
                                                                : 
                                                                {{$Order->status_nota}}
                                                                
                                                                <br>
                                                                
                                                                
                                                            </p>	
                                                            </p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    <script>
        function submitForm() {
            $("#formFilter").submit();
        }
        
        var listMenu = <?php echo json_encode($ListMenu); ?>; 
        console.log(listMenu);
        var serisData = [];
        listMenu.forEach(element => {
            serisData.push({tgl: element.tgl,name:element.nama_menu,data:[element.qty]});
            console.log(element.qty);
        });
        var optionsmtl = {
            series: 
            serisData,
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '25%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: [serisData[0].tgl],
            },
            yaxis: {
                title: {
                    text: 'Total Menu'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " qty"
                    }
                }
            }
        }
        var chart = new ApexCharts(document.querySelector("#chartMenuTerlaris"), optionsmtl);
        chart.render();
    </script>
@endpush