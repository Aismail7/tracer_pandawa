<?php

namespace App\Http\Controllers\mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Alumni;
use App\Models\MataKuliah;
use App\Models\Mahasiswa;
use App\Models\ThnAjaran;
use App\Models\Nilai;
use App\Models\Krs;
use App\Models\KrsDetil;
use App\Models\Jadwal;
use DB;

class AlumniCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['title'] = 'Data Alumni';
        $ada = Auth::user()->mahasiswa->nim;
        // dd($ada);
        $this->data['mahasiswa'] = Mahasiswa::where('nim', $ada )
        ->orderBy('nim')->paginate(15);
        return view('mahasiswa.alumni.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->input('jadwal');
        $mahasiswa_id = Auth::user()->mahasiswa->id;
        $krs = Krs::updateOrCreate(
            [
                'mahasiswa_id' => $mahasiswa_id,
                'tgl_krs' => date('Y-m-d'),
                'semester' => Nilai::whereHas('krsdetil',function($q) use($mahasiswa_id){
                    $q->whereHas('krs',function($q) use ($mahasiswa_id) {
                        $q->where('mahasiswa_id',$mahasiswa_id);
                    });
                })->max('semester_ditempuh') + 1,
                'thnajaran_id' => ThnAjaran::where('status',1)->first()->id,
            ]);
        foreach($input as $key=>$value){
            KrsDetil::create(['krs_id' => $krs->id , 'jadwal_id' => $value]);
        }
        return redirect()->route('krs.index')->with('info','Kartu Rencana Studi berhasil disimpan...!!! Silahkan menghubungi bagian administrasi untuk melakukan pembayaran.');

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
        //
    }
}
