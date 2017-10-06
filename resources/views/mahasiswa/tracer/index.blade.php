@extends('layouts.layout')

@section('content')
<div class="row-fluid">
<div class="col-md-12">
      <div class="card">
        <a href="{{route('tracer.create')}}" class="btn btn-default"><span class="icon-plus"></span> Tambah Tracer</a>
        <div class="widget-box">
          <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
            <h5>{{$title}}</h5>
          </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kantor</th>
                            <th>Web Kantor</th>
                            <th>Posisi</th>
                            <th>Bidang Usaha</th>
                            <th>Aksi</th>
                            </tr>
                                </thead>
                        <tbody>
                            @foreach($tracer as $mhs)
                            <form action="{{route('tracer.destroy',$mhs->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td width="1%">{{$loop->iteration}}</td>
                                <td width="20%">{{$mhs->nama_kantor}}</td>
                                <td width="20%">{{$mhs->web_kantor}}</td>
                                <td width="20%">{{$mhs->posisi}}</td>
                                <td width="20%">{{$mhs->bidang_usaha}}</td>                         
                                <td colspan="1">
                                <a href="{{route('tracer.edit',$mhs->id)}}" class="btn btn-success">Edit</a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                    {{$tracer->links()}}
                </div>
            </div>
        </div>
@endsection

