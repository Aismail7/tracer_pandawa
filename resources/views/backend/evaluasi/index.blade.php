@extends('layouts.layout')

@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                <th><center><a href="{{route('evaluasi.create')}}" class="btn btn-default"><span class="ti-plus"></span> Tambah Evaluasi</a></center></th>
                     
                    <h4 class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Hp</th>
                            <th>Instansi</th>
                            <th>Jabatan</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Posisi</th>
                            <th>Hp</th>
                            <th>Aksi</td>
                                </thead>
                        <tbody>
                            @foreach($evaluasi as $mhs)
                            <form action="{{route('evaluasi.destroy',$mhs->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mhs->nama_pengguna}}</td>
                                <td>{{$mhs->telp_pengguna}}</td>
                                <td>{{$mhs->instansi}}</td>
                                <td>{{$mhs->jabatan}}</td>    
                                <td>{{$mhs->nama}}</td>
                                <td>{{$mhs->nim}}</td>
                                <td>{{$mhs->posisi}}</td>
                                <td>{{$mhs->telp}}</td>                       
                                <td colspan="2">
                                    <a href="{{route('evaluasi.edit',$mhs->id)}}" class="btn btn-info"><i class="ti-pencil-alt"></i></a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger"><i class="ti-close"></i></a>
                                </td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                    {{$evaluasi->links()}}
                </div>
            </div>
        </div>
@endsection