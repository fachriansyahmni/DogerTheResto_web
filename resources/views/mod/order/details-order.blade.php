
<center><b>Detail Pesanan</b></center><br>
<B>No Meja</B> : <div class="text-muted">{{$Pesanan->Meja->nomor_meja}}</div> <p style="float:right"><b>Status</b> : {{$Pesanan->status_pesanan}}</p><br>
<b>Menu</b> <p style="float:right">
    <ul>
        @foreach ($Pesanan->pesananItems as $menuItem)
        <li>{{$menuItem->dMenu->nama}} @ {{$menuItem->qty}}</li>
        @endforeach
    </ul>
    
    <b>Tanggal</b> :  {{$Pesanan->tglpesan}}</p>