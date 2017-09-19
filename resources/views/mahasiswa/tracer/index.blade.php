@extends('layouts.layout')

@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                <th><center><a href="{{route('tracer.create')}}" class="btn btn-default"><span class="ti-plus"></span> Tambah Tracer Study</a></center></th>
                     
                    <h4 class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama Kantor</th>
                            <th>Web Kantor</th>
                            <th>Posisi</th>
                            <th>Bidang Usaha</th>
                            <th>Aksi</th>
                                </thead>
                        <tbody>
                            @foreach($tracer as $mhs)
                            <form action="{{route('tracer.destroy',$mhs->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mhs->nama_kantor}}</td>
                                <td>{{$mhs->web_kantor}}</td>
                                <td>{{$mhs->posisi}}</td>
                                <td>{{$mhs->bidang_usaha}}</td>                         
                                <td colspan="2">
                                    <a href="{{route('tracer.edit',$mhs->id)}}" class="btn btn-info"><i class="ti-pencil-alt"></i></a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger"><i class="ti-close"></i></a>
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
                            <th>No</th>
                            <th>Nama Kantor</th>
                            <th>Web Kantor</th>
                            <th>Posisi</th>
                            <th>Bidang Usaha</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                             <th><a href="{{route('tracer.create')}}" class="btn btn-default"><span class="ti-plus"></span> Tambah Dosen</a></th>
                                       
                        </thead>
                        <tbody>
                            @foreach($tracer as $mhs)
                            <form action="{{route('mahasiswa.destroy',$mhs->id)}}" method="post"  class="form-inline">
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mhs->nama_kantor}}</td>
                                <td>{{$mhs->web_kantor}}</td>
                                <td>{{$mhs->posisi}}</td>
                                <td>{{$mhs->bidang_usaha}}</td>
                                <td>{{$mhs->alamat}}</td>
                                <td colspan="2">
                                    <a href="{{route('mahasiswa.edit',$mhs->id)}}" class="btn btn-info"><i class="ti-pencil-alt"></i></a>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" >
                                    <button type="submit" class="btn btn-danger"><i class="ti-close"></i></a>
                                </td> 
                                </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                               </form>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

