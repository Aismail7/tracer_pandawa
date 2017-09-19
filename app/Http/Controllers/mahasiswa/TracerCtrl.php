<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\reqTracer;
use App\Models\Tracer;
use App\Models\Mahasiswa;
use DB;

class TracerCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['title'] = 'Data Tracer Study';
        // $ada = Auth::user()->mahasiswa->nim;
        // dd($ada);
        $this->data['tracer'] = Tracer::paginate(15);
        return view('mahasiswa.tracer.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->data['title'] = 'Tambah Data Tracer Study';
        // $this->data['dosen'] = Tracer::pluck('nama_dosen','id');
        // $this->data['jurusan'] = ['Sistem Informasi','Manajemen Informatika','Komputer Akutansi'];
        // $this->data['kelas'] = ['Pagi','Sore'];
        return view('mahasiswa.tracer.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(reqTracer $request)
    {
        //
        $input = $request->all();
        // $input['user_id'] = User::create(['username' => $input['nim'],'password' => bcrypt($input['password']),'role' => 'mahasiswa'])->id;
        Tracer::create($input);
        return redirect()->route('tracer.index')->with('info','Data Tracer Study Berhasil Ditambahkan');

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
        $this->data['mahasiswa'] = KrsDetil::where('jadwal_id',$id)->whereHas('krs' , function($q){
            $q->where('status',0);
        })->get();
        $nama_mk = $this->data['mahasiswa']->first()->jadwal->matakuliah->nama_mk;
        $nama_dosen = $this->data['mahasiswa']->first()->jadwal->dosen->nama_dosen;
        $this->data['title'] = "Daftar Calon Peserta Mata Kuliah ".$nama_mk." - Dosen ".$nama_dosen;
        return view('mahasiswa.krs.show',$this->data);
    }

    public function peserta($id){
        $this->data['mahasiswa'] = KrsDetil::where('jadwal_id',$id)->whereHas('krs' , function($q){
            $q->where('status',1);
        })->get();
        $nama_mk = $this->data['mahasiswa']->first()->jadwal->matakuliah->nama_mk;
        $nama_dosen = $this->data['mahasiswa']->first()->jadwal->dosen->nama_dosen;
        $this->data['title'] = "Daftar Peserta Mata Kuliah ".$nama_mk." - Dosen ".$nama_dosen;
        return view('mahasiswa.krs.show',$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['title'] = 'Edit Data Alumni';
        $this->data['mahasiswa'] = Mahasiswa::find($id);
        // $this->data['dosen'] = Dosen::pluck('nama_dosen','id');
         $this->data['jurusan'] =  ['Sistem Informasi','Manajemen Informatika','Komputer Akutansi'];
         $this->data['jenis'] = ['Pria','Wanita'];
         $this->data['lulus'] = ['Lulus','Tidak Lulus'];
         $this->data['bulan'] = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
         $this->data['status'] = ['Nikah','Belum Menikah'];
        return view('mahasiswa.alumni.edit',$this->data);    
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
        //
        $input = $request->except('_method','_token','mhs_id');
        $mhs = Alumni::find($id);
        $mhs->update($input);
        // $input['user_id'] = User::find($mhs->user_id)->update(['username' => $input['nim'],'password' => bcrypt($input['nim']),'role' => 'mahasiswa']);
        return redirect()->route('alumni.index')->with('info','Data Alumni berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Tracer::find($id)->delete();
        return redirect()->back()->with('info','Tracer Study Berhasil Dihapus');
    }
}
