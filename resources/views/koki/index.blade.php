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
						<th class="">Nomor Pesanan</th>
						<th class="">Total Menu</th>
						<th class="">Tanggal Pesan</th>
						<th class="">Status Menu</th>

						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>

                    @foreach ($Orders as $order)   
					<tr class="list_pesanan" data-pid="{{$order->id}}">
						<td class="table-plus">{{$order->id}}</td>
                        <td>{{count($order->pesananItems)}}</td>
                        <td>{{$order->tglpesan}}</td>
                        <td>{{$order->status_pesanan}}</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item" href="#" ><i class="dw dw-eye" data-toggle="modal" data-target="#detail-{{ $order->id }}"></i> detail</a>
								<a class="dropdown-item" href="#" ><i class="dw dw-pencil" data-toggle="modal" data-target="#edit-{{ $order->id }}"></i> Ubah</a>
								</div>
							</div>
						</td>
					</tr>

                    <div class="modal fade bs-example-modal-lg" id="edit-{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Role</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

				</tbody>
			</table>
		</div>
	</div>
	<br><br>
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 d-none" id="results">
        <center><b>Detail Pesanan</b></center><br>
        <B>No Meja</B> : <p style="float:right"><b>Status</b> : Menunggu</p><br>
        <b>Menu</b> <p style="float:right"><b>Tanggal</b> : DD-MM-YYYY</p>
    </div>
</div>
@endsection

@push('script')
	<script src="{{asset('vendor/deskapp/vendors/scripts/datatable-setting.js')}}"></script>
    <script>
        $('.list_pesanan').click(function(){
            var pesananid = $(this).data("pid");
            getDetailPesanan(pesananid);
        });

        function getDetailPesanan(pesananid){
            $.ajax({
                url: "/detail-pesanan/"+pesananid,
                type: "get",
                data: {id : pesananid},
                success: function(data){
                    $("#results").html(data.html);
                    $("#results").removeClass('d-none');
                }
            });
        }
    </script>
@endpush