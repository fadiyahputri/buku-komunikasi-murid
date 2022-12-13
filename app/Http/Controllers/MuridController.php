<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\murid;
use App\Models\kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $murid = murid::with(['RelasiToKelas'])->get();
        $kelasmurid = kelas::all();
        // $murid = murid::with('RelasiToKelas')->get();
        // dd($kelas);
        return view('admin.murid.murid', compact(['murid', 'kelasmurid']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        murid::create([
            'nama_murid' => $request -> nama_murid,

            'nisn' => $request -> nisn,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'alamat' => $request -> alamat,
            'no_telp' => $request -> no_telp,
            'email' => $request -> email,
            'password' => $request -> password,
            'kelas_id' => $request -> kelas_id,
            'guru_id' => $request -> guru_id,
            'point' => 0,
        ]);

        return redirect('/murid')->with('toast_succes', 'Data Berhasil ditambah');
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
        $m = murid::findorfail($id);
        return view ('admin.murid.editmurid', compact('m'));
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
        $m = murid::findorfail($id);
        $m -> update($request->all());
        return redirect('/murid')->with('toast_succes', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m = murid::findorfail($id);
        $m->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
