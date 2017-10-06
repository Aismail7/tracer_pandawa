@extends('layouts.layout')

@section('content')
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>{{$title}}</h5>
          </div>
	    	<form id="form-wizard" class="form-horizontal" action="{{route('tracer.update',$mahasiswa->id)}}" method="POST">
	    	{{ csrf_field() }}
            <input type="hidden" name="mhs_id" value="$mahasiswa->id">
	    	<input type="hidden" name="_method" value="PUT">
	    	<div id="form-wizard-1" class="step">
					<div class="control-group">
	                      <label class="control-label" class="form-group @if($errors->has('nama_kantor')) has-error @endif">Nama Kantor</label>
	                      <div class="controls">
	                   
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->nama_kantor}}" name="nama_kantor" disabled>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama_kantor')}}</span>
	                </div>
                        </div>
				<div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('web_kantor')) has-error @endif">Web Kantor</label>
					    <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->web_kantor}}" name="web_kantor" disabled>
	                    <span id="helpBlock2" class="help-block">{{$errors->first('web_kantor')}}</span>
	                </div>
                        </div>

			<div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('posisi')) has-error @endif">posisi</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->posisi}}" name="posisi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('posisi')}}</span>
	                </div>
                        </div>
                        <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('mulai_kerja')) has-error @endif">mulai_kerja</label>
					    <div class="controls">

	                    <input type="date" class="form-control border-input" value="{{$mahasiswa->mulai_kerja}}" name="mulai_kerja">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('mulai_kerja')}}</span>
	                </div>
                        </div>
                           <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('pekerjaan')) has-error @endif">pekerjaan</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->pekerjaan}}" name="pekerjaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pekerjaan')}}</span>
	                </div>
                        </div>
                        		   <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('sumber')) has-error @endif">sumber</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->sumber}}" name="sumber">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('sumber')}}</span>
	                </div>
                        </div>
                           <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('gaji')) has-error @endif">gaji</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->gaji}}" name="gaji">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('gaji')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('lama')) has-error @endif">lama</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->lama}}" name="lama">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('lama')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('berkaitan')) has-error @endif">berkaitan</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->berkaitan}}" name="berkaitan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('berkaitan')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('alamat')) has-error @endif">alamat</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->alamat}}" name="alamat">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('bidang_usaha')) has-error @endif">bidang_usaha</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->bidang_usaha}}" name="bidang_usaha">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('bidang_usaha')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('jumkar')) has-error @endif">jumkar</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->jumkar}}" name="jumkar">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jumkar')}}</span>
	                </div>
                        </div>
                                    <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('omact')) has-error @endif">omact</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->omact}}" name="omact">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('omact')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('pengeluaran')) has-error @endif">pengeluaran</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->pengeluaran}}" name="pengeluaran">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pengeluaran')}}</span>
	                </div>
                        </div>
                          <div class="control-group">
				    <label class="control-label" class="form-group @if($errors->has('kegiatan')) has-error @endif">kegiatan</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->kegiatan}}" name="kegiatan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('kegiatan')}}</span>
	                </div>
                        </div>
                          

  					<div class="control-group">
				   <label class="control-label" class="form-group @if($errors->has('keilmuan')) has-error @endif">keilmuan</label>
					    <div class="controls">

	                    <input type="text" class="form-control border-input" value="{{$mahasiswa->keilmuan}}" name="keilmuan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('keilmuan')}}</span>
	                </div>
                        </div>
	                    
                       	<input id="back" class="btn btn-success" type="submit" value="Simpan" />
					<a href="{{ route('tracer.index') }}" class="btn btn-danger">Batal</a>
					<div id="status"></div>
				</div>
				<div id="submitted"></div>
            </div>
	    	</form>
	    </div>
    </div>
</div>
@endsection