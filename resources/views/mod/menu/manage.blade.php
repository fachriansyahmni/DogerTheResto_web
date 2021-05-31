@extends('deskapp.dashboard')

@section('main-content')
<div class="container pd-0">
    <a href="#" data-toggle="modal" data-target="#addMenu">Tambah Menu</a>
    <a href="#">Tambah Menu Kategori</a>

    <div class="modal fade bs-example-modal-lg" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addMenuLabel">Tambah Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('store.menu')}}">
                        @csrf
						<div class="form-group">
							<label>Nama Menu</label>
							<input class="form-control" type="text" name="nama_menu" value="{{old('nama_menu')}}" placeholder="Johnny Brown" required>
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input class="form-control" type="number" name="harga_menu" value="{{old('harga_menu',0)}}" min="0">
						</div>
						<div class="form-group">
							<label>Menu Kategori</label>
							<select class="form-control" name="menu_kategori">
								<option></option>
								<option>a</option>
								<option>b</option>
							</select>
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
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="menu_status1" name="menu_status" class="custom-control-input" checked>
										<label class="custom-control-label" for="menu_status1">tersedia</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="menu_status2" name="menu_status" class="custom-control-input">
										<label class="custom-control-label" for="menu_status2">habis</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="menu_status3" name="menu_status" class="custom-control-input">
										<label class="custom-control-label" for="menu_status3">tidak dijual</label>
									</div>
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
</div>
@endsection