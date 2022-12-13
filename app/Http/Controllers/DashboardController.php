<?php

namespace App\Http\Controllers;

use App\Models\murid;
use App\Models\muridpelanggaran;
use App\Models\pelanggaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        
        $muridpelanggaran = muridpelanggaran::with('RelasiToMurid', 'RelasiToPelanggaran')->get();
        $pelanggaran = pelanggaran::all();
        $murid = murid::all();
        return view('admin.dashboard', compact(['muridpelanggaran', 'pelanggaran', 'murid']));
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
        dd($request->all());
        muridpelanggaran::create([
            'nama_murid' => $request -> nama_murid,
            'pelanggaran' => $request -> pelanggaran,
            'point' => $request -> point,
        ]);
        return redirect('/dashboard')->with('toast_succes', 'Data Berhasil ditambah');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mp = muridpelanggaran::findorfail($id);
        $mp->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
