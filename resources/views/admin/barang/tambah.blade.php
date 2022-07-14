{{-- @extends('layouts.admin.main_admin')
@section('admin_container') --}}

<form action="{{route('barang.store')}}" method="POST">
    @csrf
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang">
<br>
    <label for="harga">Harga</label>
    <input type="text" name="harga">
<br>
    <label for="jumlah">Jumlah</label>
    <input type="text" name="kuantitas">
<br>
    <label for="kategori">kategori</label>
    <select name="" id="">
        @foreach ($data as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
<br>
    <input type="submit" value="Simpan">
</form>

{{-- @endsection --}}