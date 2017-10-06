@extends('layouts.layout')
@section('content')
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>Tambah Data Evaluasi</h5>
          </div>
          <div class="widget-content nopadding">
	    	<!-- <form action="{{route('loker.store')}}" method="POST"> -->
	    	<form id="form-wizard" class="form-horizontal" action="{{route('evaluasi.store')}}" method="post">
	    	{{ csrf_field() }}

<div id="form-wizard-5" class="step">
	           
				<td><label class="control-label" class=" @if($errors->has('nama_pengguna')) has-error @endif">Nama Pengguna</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('nama_pengguna')}}" name="nama_pengguna">
	                    <span>{{$errors->first('nama_pengguna')}}</span>

	            </div>
	                      <label class="control-label" class="form-group @if($errors->has('nama_instansi')) has-error @endif">Nama Instansi</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('nama_instansi')}}" name="nama_instansi">
	                    <span>{{$errors->first('nama_instansi')}}</span>
	                </div>
	            </td>
                        <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('alamat_instansi')) has-error @endif">Alamat</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('alamat_instansi')}}" name="alamat_instansi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat_instansi')}}</span>
	                </div>
	            </div>
					
					<div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('jabatan')) has-error @endif">Jabatan</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('jabatan')}}" name="jabatan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jabatan')}}</span>
	                </div>
                  </div>
                  <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('devisi')) has-error @endif">devisi</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('devisi')}}" name="devisi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('devisi')}}</span>
	                </div>
                  </div>
                  <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('masa_kerja')) has-error @endif">Masa Kerja</label>
	                      <div class="controls">
	                    <input type="date" class="form-control border-input" value="{{old('masa_kerja')}}" name="masa_kerja">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('masa_kerja')}}</span>
	                </div>
                  </div>
                    <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('posisi')) has-error @endif">Posisi</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('posisi')}}" name="posisi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('posisi')}}</span>
	                </div>
                  </div>
                        <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('telp_pengguna')) has-error @endif">Telp Pengguna</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('telp_pengguna')}}" name="telp_pengguna">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('telp_pengguna')}}</span>
	                </div>
                  </div>
                        <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('nama')) has-error @endif">Nama</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('nama')}}" name="nama">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama')}}</span>
	                </div>
                  </div>
                  <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('nim')) has-error @endif">Nim</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('nim')}}" name="nim">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nim')}}</span>
	                </div>
                  </div>
                  <div class="col-md-5">
	          <label class="control-label" class="form-group @if($errors->has('jurusan')) has-error @endif">Jurusan</label>
	                     <div class="controls">
	          <select class="form-control border-input" name="jurusan">
	                    	@foreach($jurusan as $jur)
	                    	<option value="{{$jur}}" {{old('jurusan') == $jur ? 'selected' : ''}}>{{$jur}}</option>
	                    	@endforeach
	                    </select>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jurusan')}}</span>
	                </div>
	            </div>
                
                        <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('telp')) has-error @endif">telp</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('telp')}}" name="telp">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('telp')}}</span>
	                </div>
                  </div>
				
                       <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('ti')) has-error @endif">ti</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('ti')}}" name="ti">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('ti')}}</span>
	                </div>
                  </div>
                     <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('komunikasi')) has-error @endif">Komunikasi</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('komunikasi')}}" name="komunikasi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('komunikasi')}}</span>
	                </div>
                  </div>
 					<div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('integritas')) has-error @endif">Integritas</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('integritas')}}" name="integritas">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('integritas')}}</span>
	                </div>
                  </div>
                   <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('keahlian')) has-error @endif">Keahlian</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('keahlian')}}" name="keahlian">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('keahlian')}}</span>
	                </div>
                  </div>
                   <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('kemampuan')) has-error @endif">Kemampuan</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('kemampuan')}}" name="kemampuan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('kemampuan')}}</span>
	                </div>
                  </div>
 				 <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('tim')) has-error @endif">tim</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('tim')}}" name="tim">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tim')}}</span>
	                </div>
                  </div>                  
                      <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('pengembangan')) has-error @endif">Pengembangan</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('pengembangan')}}" name="pengembangan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pengembangan')}}</span>
	                </div>
                  </div>
                         <div class="control-group">
                            <label class="control-label" class="form-group @if($errors->has('saran')) has-error @endif">Saran</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('saran')}}" name="saran">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('saran')}}</span>
	                </div>
                  </div>
                     <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('tanggal_daftar')) has-error @endif">Tanggal Daftar</label>
	                      <div class="controls">
	                    <input type="date" class="form-control border-input" value="{{old('tanggal_daftar')}}" name="tanggal_daftar">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('tanggal_daftar')}}</span>
	                </div>
                  </div>

                     <div class="form-actions">
					<input id="back" class="btn btn-success" type="submit" value="Simpan" />
					<a href="{{ route('evaluasi.index') }}" class="btn btn-danger">Batal</a>
					<div id="status"></div>
				</div>
				<div id="submitted"></div>
            	
	    	</form>
	    </div>
    </div>
</div>
@endsection
