@extends('layouts.layout')

@section('content')
      <div class="row-fluid">
<div class="col-md-12">
      <div class="card">
        <a href="{{route('mahasiswa.create')}}" class="btn btn-default"><span class="icon-plus"></span>Tambah Alumni</a>
        <div class="widget-box">
          <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
            <h5>{{$title}}</h5>
          </div>
                <div class="widget-content padding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama Alumni</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Angkatan</th>
                            <th>Aksi</th>
                        </tr>
                                </thead>
                        <tbody>
                            @foreach($mahasiswa as $mhs)
                            <form action="{{route('mahasiswa.destroy',$mhs->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td width="10%">{{$mhs->nim}}</td>
                                <td width="20%">{{$mhs->nama_mahasiswa}}</td>
                                <td width="30%">{{$mhs->alamat}}</td>
                                <td width="10%">{{$mhs->jurusan}}</td>
                                <td width="10%">{{$mhs->angkatan}}</td>
                                
                               
                                <td width="15%">
                                    <a href="{{route('mahasiswa.edit',$mhs->id)}}" class="btn btn-info">Edit</i></a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger">Delete</i></a>
                                </td>
                          

</tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                      {{$mahasiswa->links()}}
                </div>
            </div>
        </div>
@endsection

