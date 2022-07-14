@extends('layouts.admin.main_admin')
@section('admin_container')

@
<a href="{{route('barang.create')}}">Tambah Barang</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores provident rerum, ipsum distinctio placeat nulla voluptatum molestiae ducimus recusandae qui vel! Enim eum expedita soluta autem ex architecto velit id.</p>
{{ dd('$data') }}

@endsection