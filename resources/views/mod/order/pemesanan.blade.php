@extends('deskapp.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="row clearfix mb-30">
        <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
            <div class="pd-20 card-box">
                <h5 class="h4 text-blue mb-20">Filter</h5>
                <div class="d-flex flex-column">
                    <div class="">
                        Kategori : <br>
                        @foreach (App\MenuKategori::get() as $index => $mk)
                            <input id="mk_{{$index}}" type="checkbox">
                            <label for="mk_{{$index}}">{{$mk->nama_kategori}}</label>
                        @endforeach
                    </div>
    
                    <div class="">
                        Stok : <br>
                        <input id="filter_tersedia" type="checkbox">
                        <label for="filter_tersedia">tersedia</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            {{-- <input id="filter_menu" type="text" class="form-control"> --}}
            <div class="input-group mb-3">
                <div class="input-group-prepend" style="background: gainsboro">
                  <span class="input-group-text" id="basic-addon1">Cari</span>
                </div>
                <input type="text" id="filter_menu" class="form-control" placeholder="Menu" aria-label="Search" aria-describedby="basic-addon1">
              </div>              
        </div>
    </div>
    <div class="row" id="menu-list">
        @foreach ($AllMenu as $Menu)
        <div class="col-md-4 col-sm-4 mb-30 menu-list-item">
            <div class="card card-box detail-menu" id="dmenuid{{$Menu->id}}">
                <div class="">
                    @isset($Menu->menuKategori)
                    <div class="badge badge-info position-absolute menu_kategori" style="top: 10px;left: 10px;">{{$Menu->menuKategori->nama_kategori}}</div>
                    @endisset
                    <img class="card-img-top" src="{{asset($Menu->gambar)}}" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title weight-500 nama_menu">{{$Menu->nama}}</h5>
                    <p class="card-text">Stok : <b class="stockm">{{$Menu->stok}}</b><br>Harga : <b class="hsm">{{$Menu->harga}}</b></p>
                    
                    <a href="#" class="btn btn-success btn-psn" data-menuId="{{$Menu->id}}">Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="fixed-bottom text-center" style="bottom: 10px">
        <div id="nota-content" class="mb-3 d-none" style="margin: 0 20%;">
            <div class="pd-20 border-rounded" style="display: grid; background-color: lightyellow; border-radius: 20px">
                <div class="row">
                    <div class="col-md-6">
                        Pelayan : {{Auth::user()->name}}
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-row">
                            <div class="col-2">
                                <label>Meja</label>
                            </div>
                            <div class="col-10">
                                <select id="pilihMeja" class="selectpicker form-control form-control-sm" data-size="5" data-style="btn-outline-primary">
                                    <option></option>
                                    @foreach (App\Meja::where("status",1)->get() as $Meja)
                                        <option value="{{$Meja->id}}" >{{$Meja->nomor_meja}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="tbl_pesanan" class="mb-4 table table-borderless table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Menu</th>
                            <th>Qty</th>
                            <th>Total Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="mt-2 text-left">
                    <button class="btn btn-success" onclick="submitPesanan()" type="button">Konfirmasi Pesanan</button>
                    <button class="btn btn-danger" type="button">Hapus Semua</button>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-lg" onclick="toggleNota()">konfirmasi</button>
        {{-- <button class="btn btn-light btn-lg"><i class="icon-copy dw dw-shopping-cart"></i></button> --}}
        <div class="d-none">
            <form action="{{route('konfir-pesanan')}}" id="fpesanan" method="POST">
                @csrf
                <input type="text" id="inputMeja" value="" name="noMeja">
            </form>
        </div>
    </div>
</div>
@endsection

@push('modal')
<div class="modal fade bs-example-modal-lg" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="addMenuLabel">Tambah Menu</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
@endpush

@push('script')
<script>
    function toggleNota(){
        $("#nota-content").toggleClass("d-none");
    }

    $('#pilihMeja').on("change",function(){
        $('#inputMeja').val(this.value);
    });

    $('.btn-psn').click(function(e){
        e.preventDefault();
        var qty;
        var menuId = $(this).data("menuid");
        qty = window.prompt("Jumlah yang dipesan: ");
        if (qty === null) {
                return; 
        }
        if(qty == 0 || qty == NaN){
            qty = 1;
        }
        updateNota(menuId,qty);
    });

    var input = $('#filter_menu');
    input.on("keyup",function(){
        filterMenu();
    });

    var form = $('#fpesanan');

    function filterMenu(){
        var keyword, filter, ul, li, a, i, txtValue;
        keyword = input.val().toLowerCase();
        ul = $("#menu-list");
        liChild = $(".menu-list-item .detail-menu .card-body .nama_menu");
        li = $(".menu-list-item");
            // console.log(li);

        for (i = 0; i < liChild.length; i++) {
            a = liChild[i].innerText;
            if (a.toLowerCase().indexOf(keyword) > -1) {
                li[i].classList.remove("d-none")
            } else {
                li[i].classList.add("d-none")
            }
        }
    }

    function updateNota(menuid,qty){
        var totalHarga = 0;
        var tblnota = [];
        var tbl_pesan = $('#tbl_pesanan tbody');
        var validatemenu = tbl_pesan.find("tr[class=notemenu-"+menuid+"]");
        if(validatemenu.length == 0){
            var listPesanan = '';
            var menudata = $("#dmenuid"+menuid);
            var namaMenu = menudata.find("h5").text();
            var hargasatuan = menudata.find("b[class=hsm]").text();
            var stokmenu = menudata.find("b[class=stockm]").text();
            var addtotable = '';
            tblnota.push({mid:menuid,nmmenu:namaMenu,qty:qty,tothrg:(qty*hargasatuan)});
            addtotable += '<tr class="notemenu-'+menuid+'">' +
                                            '<td>'+menuid+'</td>' +
                                            '<td>'+namaMenu+'</td>' +
                                            '<td>'+qty+'</td>' +
                                            '<td>'+(qty*hargasatuan)+'</td>' +
                                            '<td><button class="btn btn-sm btn-danger" onclick="deleteRow(\'notemenu-'+menuid+'\')">-</button></td>'
                                        +'</tr>';
            $('#tbl_pesanan tbody').append(addtotable);
            var appinput = '';
            appinput += '<div class="fmid-notemenu-'+menuid+'">';
            appinput += '<input type="text" name="menuid[]" value="'+menuid+'">';
            appinput += '<input type="text" name="qty[]" value="'+qty+'">';
            appinput += '</div>';
            form.append(appinput);
        }
    }

    function deleteRow(row){
        $('div[class="fmid-'+row+'"]').remove();
        $("."+row).remove();
    }

    function submitPesanan(){
        $('#fpesanan').submit();
    }

    $("#filter_tersedia").change(function() {
    if($("#filter_tersedia").prop('checked') == true){
        //do something
        alert("a");
    }
    });
</script>
@endpush