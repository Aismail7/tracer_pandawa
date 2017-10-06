@extends('layouts.layout')

@section('content')
     <div class="row-fluid">
<div class="col-md-12">
      <div class="card">
        <a href="{{route('loker.create')}}" class="btn btn-default"><span class="icon-plus"></span>Tambah Loker</a>
        <div class="widget-box">
          <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
            <h5>{{$title}}</h5>
          </div>
                <div class="widget-content padding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Perusahaan</th>
                            <th>Pekerjaan</th>
                            <th>Isi</th>
                            <th>Aksi</th>
            
                        </tr>
                                </thead>
                        <tbody>
                            @foreach($loker as $lkr)
                            <form action="{{route('loker.destroy',$lkr->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td width="3%">{{$lkr->id}}</td>
                                <td width="20%">{{$lkr->perusahaan}}</td>
                                <td  width="20%">{{$lkr->pekerjaan}}</td>
                                <td width="40%">{{$lkr->isi}}</td>
                                
                               
                                <td>
                                    <a href="{{route('loker.edit',$lkr->id)}}" class="btn btn-info">Edit</i></a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger">Delete</i></a>
                                </td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                    {{$loker->links()}}
                </div>
            </div>
        </div>
@endsection