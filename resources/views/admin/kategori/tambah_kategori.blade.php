@extends('layouts.admin.main_admin')
@section('admin_container')
<form action="{{route('kategori.store')}}" method="post">
    @csrf
    <input type="text" name="nama_kategori" placeholder="masukkan kategori baru">
    <input type="submit" value="Save">
</form>
@endsection