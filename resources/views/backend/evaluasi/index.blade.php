@extends('layouts.layout')

@section('content')
       <div class="row-fluid">
<div class="col-md-12">
      <div class="card">
        <a href="{{route('evaluasi.create')}}" class="btn btn-default"><span class="icon-plus"></span>Tambah Evaluasi</a>
        <div class="widget-box">
          <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
            <h5>{{$title}}</h5>
          </div>
                <div class="widget-content padding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Hp</th>
                            <th>Instansi</th>
                            <th>Jabatan</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Posisi</th>
                            <th>Aksi</td>
                                </thead>
                        <tbody>
                            @foreach($evaluasi as $eval)
                            <form action="{{route('evaluasi.destroy',$eval->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$eval->nama_pengguna}}</td>
                                <td>{{$eval->telp_pengguna}}</td>
                                <td>{{$eval->instansi}}</td>
                                <td>{{$eval->jabatan}}</td>    
                                <td>{{$eval->nama}}</td>
                                <td>{{$eval->nim}}</td>
                                <td>{{$eval->posisi}}</td>                     
                                <td colspan="2">
                                    <a href="{{route('evaluasi.edit',$eval->id)}}" class="btn btn-info">Edit</i></a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger">Delete</i></a>
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