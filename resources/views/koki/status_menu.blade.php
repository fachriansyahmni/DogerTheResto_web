@extends('deskapp.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="card">
		<div class="card-body">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Daftar Menu</h4>
					<p class="mb-30">Tabel Daftar Menu</p>
				</div>
				{{-- <div class="pull-right">
					<a href="#" data-toggle="modal" data-target="#addMenuKategori">Tambah Kategori</a>
				</div> --}}
			</div>

			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Nama Menu</th>
						<th class="table-plus datatable-nosort">Harga</th>
						<th class="table-plus datatable-nosort">Kategori</th>
						<th class="table-plus datatable-nosort">Stok</th>
						<th class="table-plus datatable-nosort">Status Menu</th>
						<th></th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($AllMenu as $Menu)
					<tr>
						<td class="table-plus">{{$Menu->nama}}</td>
						<td class="table-plus">{{$Menu->harga}}</td>
						<td class="table-plus">{{$Menu->menu_kategori_id}}</td>
						<td class="table-plus">{{$Menu->stok}}</td>
						<td class="table-plus">{{$Menu->menu_status}}</td>
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
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
@endpush