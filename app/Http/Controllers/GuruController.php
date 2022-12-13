<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use com_exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::all();
        return view('admin.guru.guru', compact('guru'));
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
        // dd($request->all());
        guru::create([
            'nama_guru' => $request -> nama_guru,
            'mata_pelajaran' => $request -> mata_pelajaran,
            'email' => $request -> email,
            'password' => $request -> password,
            'nip' => $request -> nip,
            'alamat' => $request -> alamat,
        ]);

        return redirect('/guru')->with('toast_succes', 'Data Berhasil ditambah');
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
        $g = guru::findorfail($id);
        return view ('templated.modal.modalupdateguru', compact('g'));
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
        $g = guru::findorfail($request -> id);
        $g -> update($request->all());
        return redirect('/guru')->with('toast_succes', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $g = guru::findorfail($id);
        $g->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
