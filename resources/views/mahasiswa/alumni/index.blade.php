@extends('layouts.layout')

@section('content')
<div class="row-fluid">
       <div class="col-md-12">
      <div class="card">
        
        <div class="widget-box">
          <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
           <h5>{{$title}}</h5>
          </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
          <tr>
                            <th >NIM</th>
                            <th >Nama mahasiswa</th>
                            <th >Jurusan</th>
                            <th >Ipk</th>
                            <th >Lulus</th>
                            <th >Bulan</th>
                            <th >Tahun</th>
                            <th >JK</th>
                            <th >Email</th>
                            <th >Tanggal lahir</th>
                            <th >Skripsi</th>
                            <th >Aksi</th>
                           </tr>
                                </thead>
                        <tbody>
                            
                            @foreach($mahasiswa as $mhs)
                            <form>
                            <tr>
                                <td>{{$mhs->nim}}</td>
                                <td>{{$mhs->nama_mahasiswa}}</td>
                                <td>{{$mhs->jurusan}}</td>
                                <td>{{$mhs->ipk}}</td>
                                <td>{{$mhs->lulus}}</td>
                                <td>{{$mhs->bulan}}</td>
                                <td>{{$mhs->Tahun}}</td>
                                <td>{{$mhs->jk}}</td>
                                <td>{{$mhs->email}}</td>
                                <td>{{$mhs->tanggal_lahir}}</td>
                                <td>{{$mhs->skripsi}}</td>
                                <td><a href="{{route('alumni.edit',$mhs->id)}}" class="btn btn-danger">Update</a>
                                <!-- <a href="" class="btn btn-success">Edit</a></td> -->
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

