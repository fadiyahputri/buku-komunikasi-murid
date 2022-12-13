<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Kasus_murid;
use App\Models\Kasus_pelanggaran;
use App\Models\murid;
use App\Models\murid_pelanggaran;
use App\Models\muridpelanggaran;
use App\Models\pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{

    public function index()
    {
        
       
        $pelanggaran = pelanggaran::all();
        $murid = murid::all();
        $kasus = Kasus::all();
        return view('admin.dashboard', compact(['pelanggaran', 'murid','kasus']));
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
        
        Kasus::create([
            'murid_id' => $request->nama,
            'pelanggaran_id'=>$request->pel, 
            'tanggal'=>$request->tanggal,
        ]);

        $data = DB::table('kasus')->orderBy('id', 'DESC')->limit(1)->get()->pluck('id')->first();
      

        Kasus_murid::create([
            'kasus_id'=>$data,
            'murid_id'=>$request->nama
        ]);

        Kasus_pelanggaran::create([
            'kasus_id'=>$data,
            'pelanggaran_id'=>$request->pel
        ]);
        $doc = murid::findOrFail($request->nama);
        $docs = pelanggaran::findOrFail($request->pel);
        $dok = $docs->point;
        $doks = $doc->point;
        $plus = $doks + $dok;

        $doc->update([
            'point' => $plus,
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
        
        $data = Kasus::findOrFail($id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
