@extends('layouts.layout')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="header">
	        <h4 class="title">{{$title}}</h4>
	        <p class="category"></p>
	    </div>
	    <div class="content">
	    	<form action="{{route('loker.store')}}" method="POST">
	    	{{ csrf_field() }}

            <div class="row">
		    	<div class="col-md-10">
	                <div class="form-group @if($errors->has('perusahaan')) has-error @endif">
	                    <label>Nama Perusahaan</label>
	                    <input type="text" class="form-control border-input" value="{{old('perusahaan')}}" name="perusahaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('perusahaan')}}</span>
	                </div>
	            </div>
            </div>
			 <div class="row">
		    	<div class="col-md-10">
	                <div class="form-group @if($errors->has('pekerjaan')) has-error @endif">
	                    <label>Pekerjaan</label>
	                    <input type="text" class="form-control border-input" value="{{old('pekerjaan')}}" name="pekerjaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pekerjaan')}}</span>
	                </div>
	            </div>
            </div>
						 <div class="row">
		    	<div class="col-md-10">
	                <div class="form-group @if($errors->has('isi')) has-error @endif">
	                    <label>Isi</label>
	                    <input type="text" class="form-control border-input" value="{{old('isi')}}" name="isi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('isi')}}</span>
	                </div>
	            </div>
            </div>
           
            <div class="row">
            	<div class="col-md-12">
            		<a href="{{ route('loker.index') }}" class="btn btn-default">Cancel</a>
					<input type="submit" class="btn btn-default">
            	</div>
            </div>
	    	</form>
	    </div>
    </div>
</div>
@endsection