@extends('deskapp.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="card">
		<div class="card-body">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Daftar Pesanan</h4>
					<p class="mb-30">Tabel daftar pesanan</p>
				</div>
				{{-- <div class="pull-right">
					<a href="#" data-toggle="modal" data-target="#addMenuKategori">Tambah Kategori</a>
				</div> --}}
			</div>

			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Nomor Pesanan</th>
						<th class="table-plus datatable-nosort">Nomor Meja</th>
						<th class="table-plus datatable-nosort">Total Harga</th>
						<th class="table-plus datatable-nosort">Tanggal Pesan</th>
						<th class="table-plus datatable-nosort">Status Pesanan</th>
						<th></th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($AllOrders as $Order)
					<tr>
						<td class="table-plus">{{$Order->id}}</td>
						<td class="table-plus">{{$Order->nomor_meja}}</td>
						<td class="table-plus">{{$Order->total_harga}}</td>
						<td class="table-plus">{{$Order->tglpesan}}</td>
						<td class="table-plus">{{$Order->status_pesanan}}</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="#" ><i class="dw dw-eye"></i> detail</a>
								<a class="dropdown-item" href="#" ><i class="dw dw-pencil"></i> Ubah</a>
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
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
@endpush