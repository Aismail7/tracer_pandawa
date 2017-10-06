@extends('layouts.layout')
@section('content')
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>Tambah Data Loker</h5>
          </div>
          <div class="widget-content nopadding">
	    	<!-- <form action="{{route('loker.store')}}" method="POST"> -->
	    	<form id="form-wizard" class="form-horizontal" action="{{route('loker.store')}}" method="post">
	    	{{ csrf_field() }}
	    	
		    	<div id="form-wizard-1" class="step">
					<div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('perusahaan')) has-error @endif">Perusahaan</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('perusahaan')}}" name="perusahaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('perusahaan')}}</span>
	                </div>
	            </div>
		    	<div class="control-group">
	                  <label class="control-label" class="form-group @if($errors->has('pekerjaan')) has-error @endif">Pekerjaan</label>
	                     <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('pekerjaan')}}" name="pekerjaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pekerjaan')}}</span>
	                </div>
	            </div>
	            <div class="control-group">
	                  <label class="control-label" class="form-group @if($errors->has('isi')) has-error @endif">Isi</label>
	                     <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('isi')}}" name="isi" >
	                    <span id="helpBlock2"  class="help-block">{{$errors->first('isi')}}</span>
	                </div>
	            </div>
				
           <div class="form-actions">
					<input id="back" class="btn btn-success" type="submit" value="Simpan" />
					<a href="{{ route('loker.index') }}" class="btn btn-danger">Batal</a>
					<div id="status"></div>
				</div>
				<div id="submitted"></div>
            	
	    	</form>
	    </div>
    </div>
</div>
@endsection
