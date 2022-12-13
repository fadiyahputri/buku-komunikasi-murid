<?php

namespace App\Http\Controllers;

use App\Models\murid;
use App\Models\pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = murid::all();
        $pelanggaran = pelanggaran::all();
        return view('admin.pelanggaran.pelanggaran', compact('pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggaran.inputpelanggaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pelanggaran::create([
          
            'pelanggaran' => $request -> pelanggaran,
            'point' => $request -> point,
            'sanksi' => $request -> sanksi,
        ]);
        return redirect('/pelanggaran')->with('toast_succes', 'Data Berhasil ditambah');
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
        $p = pelanggaran::findorfail($id);
        return view ('admin.pelanggaran.editpelanggaran', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $p = pelanggaran::findorfail($request->id);
        $p -> update($request->all());
        return redirect('/pelanggaran')->with('toast_succes', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = pelanggaran::findorfail($id);
        $p->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
