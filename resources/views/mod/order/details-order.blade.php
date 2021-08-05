
<center><b>Detail Pesanan</b></center><br>
<B>No Meja</B> : <div class="text-muted">{{$Pesanan->Meja->nomor_meja}}</div> <p style="float:right"><b>Status</b> : {{$Pesanan->status_pesanan}}</p><br>
<b>Menu</b> <p style="float:right">
    <ul>
        @foreach ($Pesanan->pesananItems as $menuItem)
        <li>{{$menuItem->dMenu->nama}} @ {{$menuItem->qty}}</li>
        @endforeach
    </ul>
    
    <b>Tanggal</b> :  {{$Pesanan->tglpesan}}</p>

    @if ($Pesanan->status_pesanan == "Proses Ke Koki")
    <form action="{{route('change-process',$Pesanan->id)}}" method="POST">
        @csrf
        <input type="hidden" value="Proses Masak" name="status">
        <button class="btn btn-primary btn-block" type="submit">Proses Masak</button>
    </form>
    @endif

    @if ($Pesanan->status_pesanan == "Proses Masak")
    <form action="{{route('change-process',$Pesanan->id)}}" method="POST">
        @csrf
        <input type="hidden" value="Siap Diantar" name="status">
        <button class="btn btn-success btn-block" type="submit">Siap Diantar</button>
    </form>
    @endif