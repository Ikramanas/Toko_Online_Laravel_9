@extends('layouts.admin.main_admin')
@section('admin_container')
    <div class="row-md-9">
    <a href="{{route('kategori.create')}}" class="btn btn-success">tambah Kategori</a>
    </div>

    {{-- <div class="divider">
        .
    </div> --}}
    

    <div class="card-body">
        <div class="table-responsive pt-2 pr-5 mr-5">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no=1?>
                        @foreach ($data as $w)
                        <td>
                            {{$no++}}
                        </td>
                        <td>
                            {{$w->name}}
                        </td>
                    </tr>  
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    

    
    