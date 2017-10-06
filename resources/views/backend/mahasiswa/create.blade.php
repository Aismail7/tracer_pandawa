@extends('layouts.layout')
@section('content')
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>Tambah Data Alumni</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" action="{{route('mahasiswa.store')}}" method="post">
	    	{{ csrf_field() }}
	    	
		    	<div id="form-wizard-1" class="step">
					<div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('nim')) has-error @endif">Nim</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('nim')}}" name="nim">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nim')}}</span>
	                </div>
	            </div>
		    	<div class="control-group">
	                  <label class="control-label" class="form-group @if($errors->has('angkatan')) has-error @endif">Angkatan</label>
	                     <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('angkatan')}}" name="angkatan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('angkatan')}}</span>
	                </div>
	            </div>
            	<div class="control-group">
	             <label class="control-label" class="form-group @if($errors->has('nama_mahasiswa')) has-error @endif">Nama mahasiswa</label>
	               <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('nama_mahasiswa')}}" name="nama_mahasiswa">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama_mahasiswa')}}</span>
	                </div>
	            </div>
		    	<div class="control-group">
	                <label class="control-label"  class="form-group @if($errors->has('alamat')) has-error @endif">Alamat</label>
	                     <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('alamat')}}" name="alamat">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat')}}</span>
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
			<input id="status" type="hidden" name="status" />
				<div class="form-actions">
					<input id="back" class="btn btn-success" type="submit" value="Simpan" />
					<a href="{{ route('mahasiswa.index') }}" class="btn btn-danger">Batal</a>
					<div id="status"></div>
				</div>
				<div id="submitted"></div>
            	
	    	</form>
	    </div>
    </div>
</div>
@endsection

