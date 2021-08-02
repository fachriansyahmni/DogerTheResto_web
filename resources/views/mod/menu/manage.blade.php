@extends('deskapp.dashboard')

@push('css-top')
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/deskapp/src/plugins/dropzone/src/dropzone.css')}}">
@endpush

@section('main-content')
<div class="container pd-0">
    <a href="#" data-toggle="modal" data-target="#addMenu">Tambah Menu</a>
    <a href="#" data-toggle="modal" data-target="#addMenuKategori">Tambah Menu Kategori</a>

</div>
<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Employee Registration</h4>
					<p class="mb-30">All bootstrap element classies</p>
				</div>
			</div>

			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Name</th>
						<th>Price</th>
						<th>Stok</th>
						<th>Type</th>
						<th>Status</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($AllMenu as $menu)
					<tr>
						<td class="table-plus">{{$menu->nama}}</td>
						<td class="table-plus">{{$menu->harga}}</td>
						<td class="table-plus">{{$menu->stok}}</td>
						<td class="table-plus">{{$menu->menu_kategori_id}}</td>
						<td class="table-plus">{{$menu->menu_status}}</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
									<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
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
	<script src="{{asset('vendor/deskapp/src/plugins/dropzone/src/dropzone.js')}}"></script>
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
	<script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});
	</script>
@endpush

@push('modal')
<div class="modal fade bs-example-modal-lg" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="addMenuLabel">Tambah Menu</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{route('store.menu')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Nama Menu</label>
						<input class="form-control" type="text" name="nama_menu" value="{{old('nama_menu')}}" placeholder="Johnny Brown" required>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input class="form-control" type="number" name="harga_menu" value="{{old('harga_menu')}}" min="0" required>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input class="form-control" type="number" name="stok" value="{{old('stok')}}" min="0" required>
					</div>
					<div class="form-group">
						<label>Menu Kategori</label>
						<select class="form-control" name="menu_kategori">
							<option disabled selected>pilih</option>
							@php
								$MenuKategoris = App\MenuKategori::get();
							@endphp
							@foreach ($MenuKategoris as $mk)
							<option value="{{$mk->id}}">{{$mk->nama_kategori}}</option>
								
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="">gambar</label>
						<input type="file" name="gambar">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								
								<label class="weight-600">Optional</label>
								<div class="custom-control custom-checkbox mb-5">
									<input type="checkbox" name="visible" class="custom-control-input" id="visibleCheck" checked>
									<label class="custom-control-label" for="visibleCheck">Dapat dilihat semua orang</label>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<label class="weight-600">Status Menu</label>
								@foreach (App\Menu::LISTMENUSTATUS as $statusList)	
								<div class="custom-control custom-radio mb-5">
									<input type="radio" id="" name="menu_status" class="custom-control-input">
									<label class="custom-control-label" for="">{{$statusList}}</label>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="addMenuKategori" tabindex="-1" role="dialog" aria-labelledby="addMenuKategoriLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="addMenuKategoriLabel">Tambah Menu Kategori</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{route('store.menu-kategori')}}">
					@csrf
					<div class="form-group">
						<label>Nama Menu Kategori</label>
						<input class="form-control" type="text" name="nama_kategori" value="{{old('nama_kategori')}}" placeholder="ex: Makanan" required>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endpush