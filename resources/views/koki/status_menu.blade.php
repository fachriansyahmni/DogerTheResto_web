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
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail-{{ $Menu->id }}"><i class="dw dw-eye"></i> detail</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-{{ $Menu->id }}"><i class="dw dw-pencil"></i> Ubah</a>
								</div>
							</div>
						</td>
					</tr>

					<div class="modal fade bs-example-modal-lg" id="edit-{{ $Menu->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Ubah Status</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="{{route('chef-edit-status-menu',$Menu->id)}}" method="POST">
                                    @method("POST")
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Status Menu</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <select name="menu_status" class="form-control">
                                                    	@foreach (App\Menu::LISTMENUSTATUS as $menu_status)
                                                    		<option value="{{$menu_status}}">{{$menu_status}}</option>
                                                    	@endforeach
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bs-example-modal-lg" id="detail-{{ $Menu->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Detail Menu</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="{{route('chef-edit-status-menu',$Menu->id)}}" method="POST">
                                    @method("POST")
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group row">
                                                <div class="col-sm-12 col-md-10">
                                                    	<p style="text-align:justify;"><img src="{{asset($Menu->gambar)}}" style="float:left; margin:0 9px 3px 0; height:192px; width:270px;" />
                                                    		

                                                    		<b>Nama Makanan</b>
                                                    		: 
                                                    		{{$Menu->nama}}
                                                    		
                                                    		<br>
                                                    		<b>Sisa Stok</b> 
                                                    		: 
                                                    		{{$Menu->stok}}
                                                    		
                                                    		<br>
                                                    		<b>Harga Makanan</b> 
                                                    		: 
                                                    		Rp.{{$Menu->harga}}
                                                    		
                                                    		<br>
                                                    		<b>Status Makanan</b>
                                                    		: 
                                                    		{{$Menu->menu_stat}}
                                                    		
                                                    		
														</p>	
                                                    	</p>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
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