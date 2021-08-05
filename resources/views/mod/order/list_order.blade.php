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
						<td class="table-plus">Rp.{{$Order->total_harga}}</td>
						<td class="table-plus">{{$Order->tglpesan}}</td>
						<td class="table-plus">{{$Order->status_pesanan}}</td>
						<td></td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail-{{ $Order->id }}"><i class="dw dw-eye"></i> detail</a>
								</div>
							</div>
						</td>
					</tr>
					<div class="modal fade bs-example-modal-lg" id="detail-{{ $Order->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Detail List Pesanan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="{{route('chef-order-list',$Order->id)}}" method="POST">
                                    @method("POST")
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group row">
                                                <div class="col-sm-12 col-md-10">
                                                    	<p style="text-align:justify;">
                                                    		<b>Nomor Pesanan</b>
                                                    		: 
                                                    		{{$Order->id}}
                                                    		
                                                    		<br>

                                                    		<b>Nomor Meja</b>
                                                    		: 
                                                    		{{$Order->nomor_meja}}
                                                    		
                                                    		<br>

                                                    		<b>Tanggal pemesanan</b>
                                                    		: 
                                                    		{{$Order->tglpesan}}
                                                    		
                                                    		<br>

                                                    		<b>Status Pesanan</b>
                                                    		: 
                                                    		{{$Order->status_pesanan}}
                                                    		
                                                    		<br>
                                                    		<hr>
                                                    		<b>Total Harga</b>
                                                    		: 
                                                    		Rp.{{$Order->total_harga}}
                                                    		
                                                    		<br>
                                                    		
                                                    		
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