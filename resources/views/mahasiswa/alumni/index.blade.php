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
                            <th>NIM</th>
                            <th>Nama mahasiswa</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $mhs)
                            <tr>
                                <td>{{$mhs->nim}}</td>
                                <td>{{$mhs->nama_mahasiswa}}</td>
                                <td>{{$mhs->jurusan}}</td>
                                <td><a href="{{route('alumni.edit',$mhs->id)}}" class="btn btn-info"><i class="ti-pencil-alt"></i></a></td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                 <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        @foreach($mahasiswa as $mhs)
                            <tr><th>IPK</th><td>{{$mhs->ipk}}</td></tr>
                            <tr><th>Skripsi</th><td>{{$mhs->skripsi}}</td></tr>
                            <tr><th>Lulus</th> <td>{{$mhs->lulus}}</td></tr>
                            <tr><th>Bulan</th><td>{{$mhs->bulan}}</td></tr>
                            <tr><th>Tahun</th><td>{{$mhs->tahun}}</td></tr>
                            <tr><th>Tempat Lahir</th><td>{{$mhs->tempat_lahir}}</td></tr>
                            <tr><th>Tanggal lahir</th><td>{{$mhs->tanggal_lahir}}</td></tr>
                            <tr><th>Jk</th><td>{{$mhs->jk}}</td></tr>
                            <tr><th>Status</th><td>{{$mhs->status}}</td></tr>
                            <tr><th>Hp 1</th><td>{{$mhs->hp}}</td></tr>
                            <tr><th>Hp 2</th><td>{{$mhs->hp1}}</td></tr>   
                            <tr><th>Hp 3</th> <td>{{$mhs->hp2}}</td></tr>
                            <tr><th>No Telp Ortu</th><td>{{$mhs->noortu}}</td></tr>
                            <tr><th>Email</th><td>{{$mhs->email}}</td></tr>
                            <tr><th>Facebook</th><td>{{$mhs->fb}}</td></tr>
                        </thead>
                        @endforeach
                               </form>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

