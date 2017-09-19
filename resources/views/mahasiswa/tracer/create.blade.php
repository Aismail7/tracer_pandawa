@extends('layouts.layout')

@section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">{{$title}}</h4>
                    <p class="category"></p>
                </div>
       <form action="{{route('tracer.store')}}" method="POST">
	    	{{ csrf_field() }}

                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('nama_kantor')) has-error @endif">
	                    <label>Nama Kantor</label>
	                    <input type="text" class="form-control border-input" value="{{old('nama_kantor')}}" name="nama_kantor">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('nama_kantor')}}</span>
	                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('web_kantor')) has-error @endif">
	                    <label>Web Kantor</label>
	                    <input type="text" class="form-control border-input" value="{{old('web_kantor')}}" name="web_kantor">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('web_kantor')}}</span>
	                </div>
                        </div>
                    </div>
					 <div class="row">
                       <div class="col-md-3">
                            <div class="form-group @if($errors->has('posisi')) has-error @endif">
	                    <label>Posisi</label>
	                    <input type="text" class="form-control border-input" value="{{old('posisi')}}" name="posisi">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('posisi')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('mulai_kerja')) has-error @endif">
	                    <label>Mulai Kerja</label>
	                    <input type="date" class="form-control border-input" value="{{old('mulai_kerja')}}" name="mulai_kerja">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('mulai_kerja')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('pekerjaan')) has-error @endif">
	                    <label>Pekerjaan</label>
	                    <input type="text" class="form-control border-input" value="{{old('pekerjaan')}}" name="pekerjaan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pekerjaan')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('sumber')) has-error @endif">
	                    <label>Sumber</label>
	                    <input type="text" class="form-control border-input" value="{{old('sumber')}}" name="sumber">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('sumber')}}</span>
	                </div>
                        </div>
                    </div>
				<div class="row">
                       <div class="col-md-3">
                            <div class="form-group @if($errors->has('gaji')) has-error @endif">
	                    <label>Gaji</label>
	                    <input type="text" class="form-control border-input" value="{{old('gaji')}}" name="gaji">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('gaji')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('lama')) has-error @endif">
	                    <label>Lama</label>
	                    <input type="date" class="form-control border-input" value="{{old('lama')}}" name="lama">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('lama')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('berkaitan')) has-error @endif">
	                    <label>Berkaitan</label>
	                    <input type="text" class="form-control border-input" value="{{old('berkaitan')}}" name="berkaitan">
						
	                    <span id="helpBlock2" class="help-block">{{$errors->first('berkaitan')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('bidang_usaha')) has-error @endif">
	                    <label>Bidang Usaha</label>
	                    <input type="text" class="form-control border-input" value="{{old('bidang_usaha')}}" name="bidang_usaha">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('bidang_usaha')}}</span>
	                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group @if($errors->has('alamat')) has-error @endif">
	                    <label>Alamat</label>
	                    <input type="text" class="form-control border-input" value="{{old('alamat')}}" name="alamat">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('alamat')}}</span>
	                </div>
                        </div>
						<div class="col-md-3">
                            <div class="form-group @if($errors->has('jumkar')) has-error @endif">
	                    <label>Jumlah Karyawan</label>
	                    <input type="text" class="form-control border-input" value="{{old('jumkar')}}" name="jumkar">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('jumkar')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('omact')) has-error @endif">
	                    <label>Omact</label>
	                    <input type="text" class="form-control border-input" value="{{old('omact')}}" name="omact">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('omact')}}</span>
	                </div>
                        </div>
						</div>
						<div class="row">
                       <div class="col-md-3">
                            <div class="form-group @if($errors->has('pengeluaran')) has-error @endif">
	                    <label>Pengeluaran</label>
	                    <input type="text" class="form-control border-input" value="{{old('pengeluaran')}}" name="pengeluaran">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('pengeluaran')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('kegiatan')) has-error @endif">
	                    <label>Kegiatan</label>
	                    <input type="text" class="form-control border-input" value="{{old('kegiatan')}}" name="kegiatan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('kegiatan')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('usulan')) has-error @endif">
	                    <label>Usulan</label>
	                    <input type="text" class="form-control border-input" value="{{old('usulan')}}" name="usulan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('usulan')}}</span>
	                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group @if($errors->has('keilmuan')) has-error @endif">
	                    <label>Keilmuan</label>
	                    <input type="text" class="form-control border-input" value="{{old('keilmuan')}}" name="keilmuan">
	                    <span id="helpBlock2" class="help-block">{{$errors->first('keilmuan')}}</span>
	                </div>
                        </div>
                    </div>
                        
                        <div class="row">
            	<div class="col-md-12">
            		<a href="{{ route('tracer.index') }}" class="btn btn-default">Cancel</a>
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
