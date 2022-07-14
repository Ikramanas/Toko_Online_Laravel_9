@extends('layouts.admin.main_admin')
@section('admin_container')


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Dibuat</th>
                                            <th>Diperbaharui</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Dibuat</th>
                                            <th>Diperbaharui</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($user as $w) 
                                        <tr>
                                            {{-- {{dd($w->name)}} --}}
                                            <td>{{$w->name}}</td>
                                            <td>{{$w->email}}</td>
                                            <td>{{$w->roles}}</td>
                                            <td>{{$w->created_at}}</td>
                                            <td>{{$w->updated_at}}</td>
                                            <td>
                                                <a href="user.edit" ><i class="fa-solid fa-pen-to-square "></i></a>
                                                
                                                <form action="{{route('user.delete',$w->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <i class="far fa-trash-alt"></i> --}}
                                                    <input type="submit" value="" class="far fa-trash-alt">
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection