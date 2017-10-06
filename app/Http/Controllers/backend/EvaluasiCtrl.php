<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests\reqEvaluasi;
use App\Http\Requests\reqMhs;
use App\Http\Controllers\Controller;

use App\Models\Evaluasi;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\User;
use DB;

class EvaluasiCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

// return("test");

        $this->data['title'] = 'Data Evaluasi';
        $this->data['evaluasi'] = Evaluasi::orderBy('id', 'desc')->paginate(15);
        // dd($this->data);
        return view('backend.evaluasi.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->data['title'] = 'Tambah Data Evaluasi';
        // $this->data['dosen'] = Tracer::pluck('nama_dosen','id');
        $this->data['jurusan'] = ['Sistem Informasi','Manajemen Informatika','Komputer Akutansi'];
        // $this->data['kelas'] = ['Pagi','Sore'];
        return view('backend.evaluasi.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(reqEvaluasi $request)
    {

// return("test");
        $input = $request->all();
        Evaluasi::create($input);
        return redirect()->route('evaluasi.index')->with('info','Data Evaluasi Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $this->data['evaluasi'] = KrsDetil::where('jadwal_id',$id)->whereHas('krs' , function($q){
        //     $q->where('status',0);
        // })->get();
        // $nama_mk = $this->data['mahasiswa']->first()->jadwal->matakuliah->nama_mk;
        // $nama_dosen = $this->data['mahasiswa']->first()->jadwal->dosen->nama_dosen;
        // $this->data['title'] = "Daftar Calon Peserta Mata Kuliah ".$nama_mk." - Dosen ".$nama_dosen;
        // return view('evaluasi.show',$this->data);
    }

    public function peserta($id){
        // $this->data['mahasiswa'] = KrsDetil::where('jadwal_id',$id)->whereHas('krs' , function($q){
        //     $q->where('status',1);
        // })->get();
        // $nama_mk = $this->data['mahasiswa']->first()->jadwal->matakuliah->nama_mk;
        // $nama_dosen = $this->data['mahasiswa']->first()->jadwal->dosen->nama_dosen;
        // $this->data['title'] = "Daftar Peserta Mata Kuliah ".$nama_mk." - Dosen ".$nama_dosen;
        // return view('evaluasi.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['title'] = 'Edit Data Evaluasi';
        $this->data['mahasiswa'] = Evaluasi::find($id);
         $this->data['jurusan'] =  ['Sistem Informasi','Manajemen Informatika','Komputer Akutansi'];
         $this->data['jenis'] = ['Pria','Wanita'];
         $this->data['lulus'] = ['Lulus','Tidak Lulus'];
         $this->data['bulan'] = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
         $this->data['status'] = ['Nikah','Belum Menikah'];
        return view('backend.evaluasi.edit',$this->data);    
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $input = $request->except('_method','_token','mhs_id');
        $mhs = Evaluasi::find($id);
        // dd($mhs);
        $mhs->update($input);
      
        return redirect()->route('evaluasi.index')->with('info','Data Evaluasi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Evaluasi::find($id)->delete();
        return redirect()->back()->with('info','Evaluasi Berhasil Dihapus');
    }
}
