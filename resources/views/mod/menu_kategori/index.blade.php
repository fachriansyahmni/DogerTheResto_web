@extends('deskapp.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="card">
		<div class="card-body">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Daftar Kategori</h4>
					<p class="mb-30">Halaman manajemen kategori</p>
				</div>
				<div class="pull-right">
					<a href="#" data-toggle="modal" data-target="#addMenuKategori" class="btn btn-primary">Tambah Kategori</a>
				</div>
			</div>

			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Kategori</th>
						<th>Total Menu</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($AllKategori as $Kategori)
					<tr>
						<td class="table-plus">{{$Kategori->nama_kategori}}</td>
						<td class="table-plus"></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="#"  data-toggle="modal" data-target="#editKategori{{$Kategori->id}}Modal" type="button"><i class="dw dw-edit2"></i> Edit</a>
									{{-- @if ($menu->visible == 1) --}}
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteKategori{{$Kategori->id}}" type="button"><i class="dw dw-delete-3"></i> Delete</a>
									{{-- @endif --}}
								</div>
							</div>
						</td>
					</tr>
					<div class="modal fade bs-example-modal-lg" id="editKategori{{$Kategori->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="editKategori{{$Kategori->id}}ModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="editKategori{{$Kategori->id}}ModalLabel">Edit Kategori {{$Kategori->nama_kategori}}</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="{{route('edit.kategori',$Kategori->id)}}" enctype="multipart/form-data">
										@csrf
										@method("patch")
										<div class="form-group">
											<label>Nama Kategori</label>
											<input class="form-control" type="text" name="nama_kategori" value="{{old('nama_kategori',$Kategori->nama_kategori)}}" required>
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
					<div class="modal fade" id="deleteKategori{{$Kategori->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteKategori{{$Kategori->id}}Label" aria-hidden="true">
						<div class="modal-dialog modal-sm modal-dialog-centered">
							<div class="modal-content bg-danger text-white">
								<div class="modal-body text-center">
									<h3 class="text-white mb-15"><i class="fa fa-exclamation-triangle"></i> Konfirmasi Hapus Kategori</h3>
									<p>Menu {{$Kategori->nama_kategori}} Akan Dihapus. Lanjutkan ?</p>
									<form action="{{route('delete.kategori',$Kategori->id)}}" method="POST">
										@csrf
										@method("delete")
										<button type="submit" class="btn btn-danger active">Hapus</button>
										<button type="button" class="btn btn-light"data-dismiss="modal">batal</button>
									</form>
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
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
@endpush

@push('modal')
    
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