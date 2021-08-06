@extends('deskapp.dashboard')

@push('css-top')
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/deskapp/src/plugins/dropzone/src/dropzone.css')}}">
@endpush

@section('main-content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-3 mb-30">
			<div class="card-box height-100-p widget-style1">
				<div class="d-flex flex-wrap align-items-center">
					<div class="progress-data">
						<div id="chart"></div>
					</div>
					<div class="widget-data">
						<div class="h4 mb-0">{{count(App\Menu::where('visible',1)->get())}}</div>
						<div class="weight-600 font-14">Total Menu</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 mb-30">
			<div class="card-box height-100-p widget-style1">
				<div class="d-flex flex-wrap align-items-center">
					<div class="progress-data">
						<div id="chart"></div>
					</div>
					<div class="widget-data">
						<div class="h4 mb-0">{{count(App\Menu::where('visible',1)->where("menu_status","available")->get())}}</div>
						<div class="weight-600 font-14">Menu Tersedia</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 mb-30">
			<div class="card-box height-100-p widget-style1">
				<div class="d-flex flex-wrap align-items-center">
					<div class="progress-data">
						<div id="chart"></div>
					</div>
					<div class="widget-data">
						<div class="h4 mb-0">2020</div>
						<div class="weight-600 font-14">Contact</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 mb-30">
			<div class="card-box height-100-p widget-style1">
				<div class="d-flex flex-wrap align-items-center">
					<div class="progress-data">
						<div id="chart"></div>
					</div>
					<div class="widget-data">
						<div class="h4 mb-0">2020</div>
						<div class="weight-600 font-14">Contact</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Daftar Menu</h4>
					<p class="mb-30">Halaman manajemen menu</p>
				</div>
				<div class="pull-right">
					<a href="#" data-toggle="modal" data-target="#addMenu" class="btn btn-primary">Tambah Menu</a>
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
						<td class="table-plus">{{$menu->menuKategori->nama_kategori}}</td>
						<td class="table-plus">{{$menu->menu_status}}</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
									<a class="dropdown-item" href="#"  data-toggle="modal" data-target="#editMenu{{$menu->id}}Modal" type="button"><i class="dw dw-edit2"></i> Edit</a>
									@if ($menu->visible == 1)
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteMenu{{$menu->id}}" type="button"><i class="dw dw-delete-3"></i> Delete</a>
									@endif
								</div>
							</div>
						</td>
					</tr>
					<div class="modal fade bs-example-modal-lg" id="editMenu{{$menu->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="editMenu{{$menu->id}}ModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="editMenu{{$menu->id}}ModalLabel">Menu {{$menu->id}}</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="{{route('edit.menu',$menu->id)}}" enctype="multipart/form-data">
										@csrf
										@method("patch")
										<div class="form-group">
											<label>Nama Menu</label>
											<input class="form-control" type="text" name="nama_menu" value="{{old('nama_menu',$menu->nama)}}" required>
										</div>
										<div class="form-group">
											<label>Harga</label>
											<input class="form-control" type="number" name="harga_menu" value="{{old('harga_menu',$menu->harga)}}" min="0" required>
										</div>
										<div class="form-group">
											<label>Stok</label>
											<input class="form-control" type="number" name="stok" value="{{old('stok',$menu->stok)}}" min="0" required>
										</div>
										<div class="form-group">
											<label>Menu Kategori</label>
											<select class="form-control" name="menu_kategori">
												<option disabled selected>pilih</option>
												@foreach ($MenuKategoris as $mk)
													<option value="{{$mk->id}}" {{($menu->menu_kategori_id == $mk->id) ? "selected":""}}>{{$mk->nama_kategori}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label for="">gambar</label>
											<div class="row">
												<div class="col-md-4">
													<input type="file" class="form-control" name="gambar">
												</div>
												<div class="col-md-8">
													<div class="" style="width: 50%; border: 1px solid black"><img src="{{asset($menu->gambar)}}" alt=""></div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<label class="weight-600">Optional</label>
													<div class="custom-control custom-checkbox mb-5">
														<input type="checkbox" name="visible" class="custom-control-input" id="visibleCheck" {{($menu->visible == 1) ? "checked":""}}>
														<label class="custom-control-label" for="visibleCheck">Dapat dilihat semua orang</label>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<label class="weight-600">Status Menu</label>
													@foreach ($ListStatusMenu as $index => $statusList)	
													<div class="custom-control custom-radio mb-5">
														<input type="radio" id="status{{$index}}" value="{{$statusList}}" name="menu_status" {{($menu->menu_status == $statusList) ? "checked":""}} class="custom-control-input">
														<label class="custom-control-label" for="status{{$index}}">{{$statusList}} </label>
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
					@if ($menu->visible == 1)
					<div class="modal fade" id="deleteMenu{{$menu->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteMenu{{$menu->id}}Label" aria-hidden="true">
						<div class="modal-dialog modal-sm modal-dialog-centered">
							<div class="modal-content bg-danger text-white">
								<div class="modal-body text-center">
									<h3 class="text-white mb-15"><i class="fa fa-exclamation-triangle"></i> Konfirmasi Hapus Menu</h3>
									<p>Menu {{$menu->nama}} Akan Dihapus. Lanjutkan ?</p>
									<form action="{{route('delete.menu',$menu->id)}}" method="POST">
										@csrf
										@method("delete")
										<button type="submit" class="btn btn-danger active">Hapus</button>
										<button type="button" class="btn btn-light"data-dismiss="modal">batal</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					@endif
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
						<input class="form-control" type="text" name="nama_menu" value="{{old('nama_menu')}}" required>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input class="form-control" type="number" name="harga_menu" value="{{old('harga_menu')}}" min="0" required>
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input class="form-control" type="number" name="stok" value="{{old('stok')}}" min="0" required>
					</div>
					<div class="form-group">
						<label>Menu Kategori</label>
						<select class="form-control" name="menu_kategori">
							<option disabled selected>pilih</option>
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
								<label class="weight-600">Status Menu</label>
								@foreach ($ListStatusMenu as $index => $statusList)	
								<div class="custom-control custom-radio mb-5">
									<input type="radio" id="nstatus{{$index}}" value="{{$statusList}}" name="menu_status" class="custom-control-input">
									<label class="custom-control-label" for="nstatus{{$index}}">{{$statusList}} </label>
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
@endpush