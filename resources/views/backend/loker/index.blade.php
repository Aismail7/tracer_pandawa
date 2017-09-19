@extends('layouts.layout')

@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Perusahaan</th>
                            <th>Pekerjaan</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                            <th><a href="{{route('loker.create')}}" class="btn btn-default"><span class="ti-plus"></span> Tambah Loker</a></th>
                        </thead>
                        <tbody>
                            @foreach($loker as $lkr)
                            <form action="{{route('loker.destroy',$lkr->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td>{{$lkr->id}}</td>
                                <td>{{$lkr->perusahaan}}</td>
                                <td>{{$lkr->pekerjaan}}</td>
                                <td>{{$lkr->isi}}</td>
                                
                               
                                <td colspan="2">
                                    <a href="{{route('loker.edit',$lkr->id)}}" class="btn btn-info"><i class="ti-pencil-alt"></i></a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger"><i class="ti-close"></i></a>
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