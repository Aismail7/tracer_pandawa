@extends('layouts.layout')

@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
       <form action="{{route('evaluasi.index')}}" method="POST">
	    	{{ csrf_field() }}

                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('nama_pengguna')) has-error @endif">
	                    <label>Nama Pengguna</label>
	                    <input type="text" class="form-control border-input" value="{{old('nama_pengguna')}}" name="nama_pengguna">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama_pengguna')}}</span>
	                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('nama_instansi')) has-error @endif">
	                    <label>Nama Instansi</label>
	                    <input type="text" class="form-control border-input" value="{{old('nama_instansi')}}" name="nama_instansi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama_instansi')}}</span>
	                </div>
                        </div>
                    </div>
					 <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('alamat_instansi')) has-error @endif">
	                    <label>Alamat</label>
	                    <input type="text" class="form-control border-input" value="{{old('alamat_instansi')}}" name="alamat_instansi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat_instansi')}}</span>
	                </div>
                        </div>
						<div class="col-md-3">
                            <div class="form-group @if($errors->has('jabatan')) has-error @endif">
	                    <label>Jabatan</label>
	                    <input type="text" class="form-control border-input" value="{{old('jabatan')}}" name="jabatan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jabatan')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('telp_penggguna')) has-error @endif">
	                    <label>Hp Pengguna</label>
	                    <input type="text" class="form-control border-input" value="{{old('telp_penggguna')}}" name="telp_penggguna">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('telp_penggguna')}}</span>
	                </div>
                        </div>
						</div>
				 <div class="row">
                       <div class="col-md-3">
                            <div class="form-group @if($errors->has('nama')) has-error @endif">
	                    <label>Nama</label>
	                    <input type="text" class="form-control border-input" value="{{old('nama')}}" name="nama">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama')}}</span>
	                </div>
                        </div>
						<div class="col-md-3">
                            <div class="form-group @if($errors->has('nim')) has-error @endif">
	                    <label>Nim</label>
	                    <input type="text" class="form-control border-input" value="{{old('nim')}}" name="nim">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nim')}}</span>
	                </div>
                        </div>
                    <div class="col-md-3">
                            <div class="form-group @if($errors->has('posisi')) has-error @endif">
	                    <label>Posisi</label>
	                    <input type="text" class="form-control border-input" value="{{old('posisi')}}" name="posisi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('posisi')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('telp')) has-error @endif">
	                    <label>Hp</label>
	                    <input type="text" class="form-control border-input" value="{{old('telp')}}" name="telp">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('telp')}}</span>
	                </div>
                    </div>
                    </div>
				<div class="row">
                       <div class="col-md-3">
                            <div class="form-group @if($errors->has('ti')) has-error @endif">
	                    <label>Ti</label>
	                    <input type="text" class="form-control border-input" value="{{old('ti')}}" name="ti">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('ti')}}</span>
	                </div>
                        </div>
                    <div class="col-md-3">
                            <div class="form-group @if($errors->has('komunikasi')) has-error @endif">
	                    <label>Komunikasi</label>
	                    <input type="text" class="form-control border-input" value="{{old('komunikasi')}}" name="komunikasi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('komunikasi')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('tim')) has-error @endif">
	                    <label>Tim</label>
	                    <input type="text" class="form-control border-input" value="{{old('tim')}}" name="tim">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tim')}}</span>
	                </div>
                        </div>
                     <div class="col-md-3">
                            <div class="form-group @if($errors->has('pengembangan')) has-error @endif">
	                    <label>Pengembangan</label>
	                    <input type="text" class="form-control border-input" value="{{old('pengembangan')}}" name="pengembangan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pengembangan')}}</span>
	                </div>
                    </div>
					</div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group @if($errors->has('saran')) has-error @endif">
	                    <label>Saran</label>
	                    <input type="text" class="form-control border-input" value="{{old('saran')}}" name="saran">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('saran')}}</span>
	                </div>
					</div>
                    <div class="col-md-2">
                            <div class="form-group @if($errors->has('tanggal_daftar')) has-error @endif">
	                    <label>Tanggal Daftar</label>
	                    <input type="date" class="form-control border-input" value="{{old('tanggal_daftar')}}" name="tanggal_daftar">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tanggal_daftar')}}</span>
	                </div>
                        </div>
                        </div>
                        <div class="row">
            	<div class="col-md-12">
            		<a href="{{ route('evaluasi.index') }}" class="btn btn-default">Cancel</a>
					<input type="submit" class="btn btn-default">
            	</div>
            </div>
                        </form>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
