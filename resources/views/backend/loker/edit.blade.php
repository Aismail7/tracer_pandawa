@extends('layouts.layout')

@section('content')
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>{{$title}}</h5>
          </div>
          <form id="form-wizard" class="form-horizontal" action="{{route('loker.update',$loker->id)}}" method="POST">
	    	{{ csrf_field() }}
	    	<input type="hidden" name="id" value="$loker->id">
	    	<input type="hidden" name="_method" value="PUT">
	    	<div id="form-wizard-1" class="step">
					<div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('perusahaan')) has-error @endif">Perusahaan
	                      </label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$loker->perusahaan}}" name="perusahaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nim')}}</span>
	                </div>
	            </div>
	            <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('pekerjaan')) has-error @endif">Pekerjaan</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$loker->pekerjaan}}" name="pekerjaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nim')}}</span>
	                </div>
	            </div>
	            <div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('isi')) has-error @endif">Pekerjaan</label>
	                      <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$loker->isi}}" name="isi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('isi')}}</span>
	                </div>
	            </div>
            
           <input id="status" type="hidden" name="status" />
				<div class="form-actions">
					<input id="back" class="btn btn-success" type="submit" value="Simpan" />
					<a href="{{ route('loker.index') }}" class="btn btn-danger">Batal</a>
					<div id="status"></div>
				</div>
				<div id="submitted"></div>
            </div>
	    	</form>
	    </div>
    </div>
</div>
@endsection