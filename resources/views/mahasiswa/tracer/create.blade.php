@extends('layouts.layout')
@section('content')
<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h5>{{$title}}</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" action="{{route('tracer.store')}}" method="post">
            {{ csrf_field() }}
            <div id="form-wizard-1" class="step">
                    <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('nama_kantor')) has-error @endif">Nama Kantor</label>
                          <div class="controls">
                        <input type="text" class="form-control border-input" value="{{old('nama_kantor')}}" name="nama_kantor">
                        <span id="helpBlock2" class="help-block">{{$errors->first('nama_kantor')}}</span>
                    </div>
                </div>
                 <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('web_kantor')) has-error @endif">Web Kantor</label>
                          <div class="controls">
                        <input type="text" class="form-control border-input" value="{{old('web_kantor')}}" name="web_kantor">
                        <span id="helpBlock2" class="help-block">{{$errors->first('web_kantor')}}</span>
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
                          <label class="control-label" class="form-group @if($errors->has('mulai_kerja')) has-error @endif">Mulai Kerja</label>
                          <div class="controls">
                       
	                    <input type="date" class="form-control border-input" value="{{old('mulai_kerja')}}" name="mulai_kerja">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('mulai_kerja')}}</span>
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
                          <label class="control-label" class="form-group @if($errors->has('sumber')) has-error @endif">Sumber</label>
                          <div class="controls">
                        
	                    <input type="text" class="form-control border-input" value="{{old('sumber')}}" name="sumber">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('sumber')}}</span>
	                </div>
                        </div>
                
                    <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('gaji')) has-error @endif">Gaji</label>
                          <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('gaji')}}" name="gaji">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('gaji')}}</span>
	                </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('lama')) has-error @endif">Lama</label>
                          <div class="controls">
                       
	                    <input type="date" class="form-control border-input" value="{{old('lama')}}" name="lama">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('lama')}}</span>
	                </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('berkaitan')) has-error @endif">Berkaitan</label>
                          <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('berkaitan')}}" name="berkaitan">
						
	                    <span id="helpBlock2" class="help-block">{{$errors->first('berkaitan')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('bidang_usaha')) has-error @endif">Bidang Usaha</label>
                          <div class="controls">
                        
	                    <input type="text" class="form-control border-input" value="{{old('bidang_usaha')}}" name="bidang_usaha">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('bidang_usaha')}}</span>
	                </div>
                        </div>
                    </div>
                      <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('alamat')) has-error @endif">Alamat</label>
                          <div class="controls">
                   
	                    <input type="text" class="form-control border-input" value="{{old('alamat')}}" name="alamat">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat')}}</span>
	                </div>
                        </div>
                         <div class="control-group">
                          <label class="control-label" class="form-group @if($errors->has('jumkar')) has-error @endif">Jumlah Karyawan</label>
                          <div class="controls">
						
	                    <input type="text" class="form-control border-input" value="{{old('jumkar')}}" name="jumkar">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jumkar')}}</span>
	                </div>
                        </div>
                         <div class="control-group">
                        <label class="control-label" class="form-group @if($errors->has('omact')) has-error @endif">Omact</label>
                          <div class="controls">
	                    <input type="text" class="form-control border-input" value="{{old('omact')}}" name="omact">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('omact')}}</span>
	                </div>
                        </div>
                             <div class="control-group">
                        <label class="control-label" class="form-group @if($errors->has('pengeluaran')) has-error @endif">Pengeluaran</label>
                          <div class="controls">
	         
	                    <input type="text" class="form-control border-input" value="{{old('pengeluaran')}}" name="pengeluaran">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pengeluaran')}}</span>
	                </div>
                        </div>
                                       <div class="control-group">
                        <label class="control-label" class="form-group @if($errors->has('kegiatan')) has-error @endif">Kegiatan</label>
                          <div class="controls">
                    
	                    <input type="text" class="form-control border-input" value="{{old('kegiatan')}}" name="kegiatan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('kegiatan')}}</span>
	                </div>
                        </div>
                         <div class="control-group">
                    <label class="control-label" class="form-group @if($errors->has('usulan')) has-error @endif">Usulan</label>
                          <div class="controls">
                       
	                    <input type="text" class="form-control border-input" value="{{old('usulan')}}" name="usulan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('usulan')}}</span>
	                </div>
                        </div>
                        <div class="control-group">
                    <label class="control-label" class="form-group @if($errors->has('keilmuan')) has-error @endif">Keilmuan</label>
                          <div class="controls">
                        
	                    <input type="text" class="form-control border-input" value="{{old('keilmuan')}}" name="keilmuan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('keilmuan')}}</span>
	                </div>
                        </div>
                   <div class="form-actions">
                    <input id="back" class="btn btn-success" type="submit" value="Simpan" />
                    <a href="{{ route('tracer.index') }}" class="btn btn-danger">Batal</a>
                    <div id="status"></div>
                </div>
                <div id="submitted"></div>
                
            </form>
        </div>
    </div>
</div>
@endsection

