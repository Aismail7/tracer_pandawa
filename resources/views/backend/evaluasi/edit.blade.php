@extends('layouts.layout')

@section('content')
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>{{$title}}</h5>
          </div>
	    	<form id="form-wizard" class="form-horizontal" action="{{route('evaluasi.update',$mahasiswa->id)}}" method="POST">
	    	{{ csrf_field() }}
            <input type="hidden" name="mhs_id" value="$mahasiswa->id">
	    	<input type="hidden" name="_method" value="PUT">
	    		    	<div id="form-wizard-1" class="step">
					<div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('nim')) has-error @endif">Nim</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->nim}}" name="nim">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nim')}}</span>
	                </div>
	            </div>
                       <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('nama_mahasiswa')) has-error @endif">Nama</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->nama_mahasiswa}}" name="nama_mahasiswa">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama_mahasiswa')}}</span>
	                </div>
	            </div>
                     <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('alamat')) has-error @endif">Alamat</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->alamat}}" name="alamat">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat')}}</span>
	                </div>
	            </div>
                        <div class="control-group">
                        	 <label class="control-label" class="form-group @if($errors->has('jurusan')) has-error @endif">Jurusan</label>
                            <div class="controls">
	                    <select class="form-control border-input" name="jurusan" >
	                    	@foreach($jurusan as $jur)
	                    	<option value="{{$jur}}" {{$mahasiswa->jurusan == $jur ? 'selected' : ''}}>{{$jur}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jurusan')}}</span>
	                </div>
                        </div>




                     <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('jk')) has-error @endif">Jk</label>
                            <div class="controls">
	                    <select class="form-control border-input" name="jk">
	                    	@foreach($jenis as $jk)
	                    	<option value="{{$jk}}" {{$mahasiswa->jk == $jk ? 'selected' : ''}}>{{$jk}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jk')}}</span>
	                </div>
                        </div>
                                <div class="control-group">
                         <label class="control-label" class="form-group @if($errors->has('lulus')) has-error @endif">Lulus</label>
	                     <div class="controls">
	                    <select class="form-control border-input" name="lulus">
	                    	@foreach($lulus as $ls)
	                    	<option value="{{$ls}}" {{$mahasiswa->lulus == $ls ? 'selected' : ''}}>{{$ls}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('lulus')}}</span>
	                </div>
                        </div>
                           <div class="control-group">
                        
	                    <label class="control-label" class="form-group @if($errors->has('bulan')) has-error @endif">Bulan</label>
	                     <div class="controls">
	                    <select class="form-control border-input" name="bulan">
	                    	@foreach($bulan as $bl)
	                    	<option value="{{$bl}}" {{$mahasiswa->bulan == $bl ? 'selected' : ''}}>{{$bl}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('bulan')}}</span>
	                </div>
                        </div>
                     <div class="control-group">
	                     <label class="control-label" class="form-group @if($errors->has('tahun')) has-error @endif">Tahun</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->tahun}}" name="tahun">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tahun')}}</span>
	                </div>
                        </div>
                   <div class="control-group">
                        <label class="control-label" class="form-group @if($errors->has('tempat_lahir')) has-error @endif">Tempat Lahir</label>
	                       <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->tempat_lahir}}" name="tempat_lahir">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tempat_lahir')}}</span>
	                </div>
                        </div>
                     <div class="control-group">
                        <label class="control-label" class="form-group @if($errors->has('tanggal_lahir')) has-error @endif">Tanggal Lahir</label>
                         <div class="controls">
	                    <input type="date" class="form-control border-input" value="{{$mahasiswa->tanggal_lahir}}" name="tanggal_lahir">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tanggal_lahir')}}</span>
	                </div>
	            </div>
                         <div class="control-group">
	                    <label class="control-label" class="form-group @if($errors->has('status')) has-error @endif">Status</label>
                         <div class="controls">
	                    <select class="form-control border-input" name="status">
	                    	@foreach($status as $stt)
	                    	<option value="{{$stt}}" {{$mahasiswa->status == $stt ? 'selected' : ''}}>{{$stt}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('status')}}</span>
	                </div>
                        </div>
                    </div>
             <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('hp')) has-error @endif">Hp</label>
					<div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->hp}}" name="hp">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('hp')}}</span>
	                </div>
                        </div>
                          <div class="control-group">
                          	<label class="control-label" class="form-group @if($errors->has('hp1')) has-error @endif">Hp 1</label>
					<div class="controls">
                      
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->hp1}}" name="hp1">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('hp1')}}</span>
	                </div>
                        </div>
                        <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('hp2')) has-error @endif">Hp</label>
					<div class="controls">
                       
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->hp2}}" name="hp2">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('hp2')}}</span>
	                </div>
                        </div>
                          <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('noortu')) has-error @endif">No Telp Orang Tua</label>
					<div class="controls">
                       
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->noortu}}" name="noortu">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('noortu')}}</span>
	                </div>
                        </div>
                    <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('email')) has-error @endif">Email</label>
					<div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->email}}" name="email">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('email')}}</span>
	                </div>
                        </div>
                         <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('fb')) has-error @endif">Facebook</label>
					<div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->fb}}" name="fb">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('fb')}}</span>
	                </div>
                        </div>
                        <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('ipk')) has-error @endif">IPK</label>
					<div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->ipk}}" name="ipk">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('ipk')}}</span>
	                </div>
                        </div>
                       <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('skripsi')) has-error @endif">Skripsi</label>
					<div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->skripsi}}" name="skripsi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('skripsi')}}</span>
	                </div>
                        </div>
				<div class="form-actions">
					<input id="back" class="btn btn-success" type="submit" value="Simpan" />
					<a href="{{ route('evaluasi.index') }}" class="btn btn-danger">Batal</a>
					<div id="status"></div>
				</div>
				<div id="submitted"></div>
            </div>
	    	</form>
	    </div>
    </div>
</div>
@endsection