@extends('deskapp.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="card">
		<div class="card-body">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Daftar Struk Pesanan</h4>
					<p class="mb-30">Halaman struk pesanan</p>
				</div>
                <div class="pull-right">
                    
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg">List Pesanan</a>
                </div>
				{{-- <div class="pull-right">
					<a href="#" data-toggle="modal" data-target="#addMenuKategori">Tambah Kategori</a>
				</div> --}}
			</div>

			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus">Nomor Struk</th>
						<th class="">Nomor Pesanan</th>
						<th class="">Tanggal Pesan</th>
						<th class="">Tanggal Bayar</th>
						<th class="">Status</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($Receipts as $Receipt)   
					<tr class="list_pesanan" data-pid="{{$Receipt->id}}">
						<td class="table-plus">{{$Receipt->id}}</td>
                        <td>{{$Receipt->nomor_pesanan}}</td>
                        <td>{{$Receipt->tgl_pesan}}</td>
                        <td>{{$Receipt->tgl_bayar}}</td>
                        <td>
                            @if (strtolower($Receipt->status_nota) == "lunas")
                                <div class="text-success text-uppercase"> {{$Receipt->status_nota}}</div>
                                @else
                                {{$Receipt->status_nota}}
                            @endif
                        </td>
						<td>
							{{-- <div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								</div>
							</div> --}}
						</td>
					</tr>
                    @endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">List Pesanan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Nomor Pesanan</th>
                            <th class="table-plus datatable-nosort">Total Menu</th>
                            <th class="table-plus datatable-nosort">Tanggal Pesan</th>
                            <th class="table-plus datatable-nosort">Status</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($AllOrders as $Order)   
                        <tr class="list_pesanan" data-pid="{{$Order->id}}">
                            <td class="table-plus"><a href="#">{{$Order->id}}</a></td>
                            <td>{{count($Order->pesananItems)}}</td>
                            <td>{{$Order->tglpesan}}</td>
                            <td>{{$Order->status_pesanan}}</td>
                            <td>
                                <form action="{{route('save-receipt', $Order->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-success" type="submit">Konfirmasi Lunas</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
@endpush