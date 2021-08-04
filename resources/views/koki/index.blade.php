@extends('deskapp.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="card">
		<div class="card-body">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Daftar Pesanan</h4>
					<p class="mb-30">Halaman daftar pesanan</p>
				</div>
				{{-- <div class="pull-right">
					<a href="#" data-toggle="modal" data-target="#addMenuKategori">Tambah Kategori</a>
				</div> --}}
			</div>

			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Nomor Pesanan</th>
						<th></th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td class="table-plus"></td>
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

				</tbody>
			</table>
		</div>
	</div>
	<br><br>
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <center><b>Detail Pesanan</b></center><br>
        <B>No Meja</B> : <p style="float:right"><b>Status</b> : Menunggu</p><br>
        <b>Menu</b> <p style="float:right"><b>Tanggal</b> : DD-MM-YYYY</p>
    </div>
</div>
@endsection

@push('script')
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
@endpush