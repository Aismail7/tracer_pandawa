@extends('layouts.layout')

@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
        <form action="{{route('alumni.update',$mahasiswa->id)}}" method="POST">
	    	{{ csrf_field() }}
            <input type="hidden" name="mhs_id" value="$mahasiswa->id">
	    	<input type="hidden" name="_method" value="PUT">
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('nim')) has-error @endif">
	                    <label>NIM</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->nim}}" name="nim" disabled>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nim')}}</span>
	                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('nama_mahasiswa')) has-error @endif">
	                    <label>Nama</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->nama_mahasiswa}}" name="nama_mahasiswa" disabled>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama_mahasiswa')}}</span>
	                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('alamat')) has-error @endif">
	                    <label>Alamat</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->alamat}}" name="alamat">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat')}}</span>
	                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('jurusan')) has-error @endif">
	                    <label>Jurusan</label>
	                    <select class="form-control border-input" name="jurusan" disabled>
	                    	@foreach($jurusan as $jur)
	                    	<option value="{{$jur}}" {{$mahasiswa->jurusan == $jur ? 'selected' : ''}}>{{$jur}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jurusan')}}</span>
	                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('jenis')) has-error @endif">
	                    <label>Jenis Kelamin</label>
	                    <select class="form-control border-input" name="jk">
	                    	@foreach($jenis as $jk)
	                    	<option value="{{$jk}}" {{$mahasiswa->jk == $jk ? 'selected' : ''}}>{{$jk}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jk')}}</span>
	                </div>
                        </div>
                             <div class="col-md-3">
                            <div class="form-group @if($errors->has('lulus')) has-error @endif">
	                    <label>Lulus</label>
	                    <select class="form-control border-input" name="lulus">
	                    	@foreach($lulus as $ls)
	                    	<option value="{{$ls}}" {{$mahasiswa->lulus == $ls ? 'selected' : ''}}>{{$ls}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('lulus')}}</span>
	                </div>
                        </div>
                         <div class="col-md-3">
                            <div class="form-group @if($errors->has('bulan')) has-error @endif">
	                    <label>Bulan</label>
	                    <select class="form-control border-input" name="bulan">
	                    	@foreach($bulan as $bl)
	                    	<option value="{{$bl}}" {{$mahasiswa->bulan == $bl ? 'selected' : ''}}>{{$bl}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('bulan')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('tahun')) has-error @endif">
	                    <label>Tahun</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->tahun}}" name="tahun">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tahun')}}</span>
	                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('tempat_lahir')) has-error @endif">
	                    <label>Tempat Lahir</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->tempat_lahir}}" name="tempat_lahir">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tempat_lahir')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
	                <div class="form-group @if($errors->has('tanggal_lahir')) has-error @endif">
	                    <label>Tanggal Lahir</label>
	                    <input type="date" class="form-control border-input" value="{{$mahasiswa->tanggal_lahir}}" name="tanggal_lahir">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tanggal_lahir')}}</span>
	                </div>
	            </div>
                         <div class="col-md-3">
                            <div class="form-group @if($errors->has('status')) has-error @endif">
	                    <label>Lulus</label>
	                    <select class="form-control border-input" name="status">
	                    	@foreach($status as $stt)
	                    	<option value="{{$stt}}" {{$mahasiswa->status == $stt ? 'selected' : ''}}>{{$stt}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('status')}}</span>
	                </div>
                        </div>
                    </div>
             <div class="row">
                       <div class="col-md-3">
                            <div class="form-group @if($errors->has('hp')) has-error @endif">
	                    <label>Hp</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->hp}}" name="hp">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('hp')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('hp1')) has-error @endif">
	                    <label>Hp 1</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->hp1}}" name="hp1">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('hp1')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('hp2')) has-error @endif">
	                    <label>Hp 2</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->hp2}}" name="hp2">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('hp2')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('noortu')) has-error @endif">
	                    <label>No Telp Orang Tua</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->noortu}}" name="noortu">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('noortu')}}</span>
	                </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('email')) has-error @endif">
	                    <label>Email</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->email}}" name="email">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('email')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('fb')) has-error @endif">
	                    <label>Facebook</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->fb}}" name="fb">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('fb')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('ipk')) has-error @endif">
	                    <label>IPK</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->ipk}}" name="ipk">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('ipk')}}</span>
	                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group @if($errors->has('skripsi')) has-error @endif">
	                    <label>Skripsi</label>
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->skripsi}}" name="skripsi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('skripsi')}}</span>
	                </div>
                        </div>
                        </div>
                        <div class="row">
            	<div class="col-md-12">
            		<a href="{{ route('alumni.index') }}" class="btn btn-default">Cancel</a>
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
