<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests\reqLoker;
use App\Http\Controllers\Controller;

use App\Models\Loker;
use App\Models\Dosen;
use App\User;

class LokerCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->data['title'] = 'Data Loker';
        $this->data['loker'] = Loker::paginate(15);
        // dd($this->data['loker']);
        return view('backend.loker.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->data['title'] = 'Tambah Data Loker';
        // $this->data['dosen'] = Dosen::pluck('nama_dosen','id');
        // $this->data['jurusan'] = ['Sistem Informasi','Manajemen Informatika','Komputer Akutansi'];
        // $this->data['kelas'] = ['Pagi','Sore'];
        return view('backend.loker.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(reqLoker $request)
    {
        //
        $input = $request->all();
        // $input['user_id'] = User::create(['username' => $input['nim'],'password' => bcrypt($input['password']),'role' => 'mahasiswa'])->id;
        Loker::create($input);
        return redirect()->route('loker.index')->with('info','Data Loker Berhasil Ditambahkan');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $this->data['title'] = 'Edit Data Loker';
        $this->data['loker'] = Loker::find($id);
        // $this->data['dosen'] = Dosen::pluck('nama_dosen','id');
        // $this->data['jurusan'] =  ['Sistem Informasi','Manajemen Informatika','Komputer Akutansi'];
        // $this->data['kelas'] = ['Pagi','Sore'];
        return view('backend.loker.edit',$this->data);
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
        $input = $request->except('_method','_token','id');
        $lkr = Loker::find($id);
        $lkr->update($input);
        // $input['user_id'] = User::find($mhs->user_id)->update(['username' => $input['nim'],'password' => bcrypt($input['nim']),'role' => 'mahasiswa']);
        return redirect()->route('loker.index')->with('info','Data Loker berhasil diubah');
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
        Loker::find($id)->delete();
        return redirect()->route('loker.index')->with('info','Data Loker berhasil dihapus');
    }
}
