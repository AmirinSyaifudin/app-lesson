<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Peserta;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data_peserta = \App\Peserta::all();


        return view('admin.peserta.index', [
            'data_peserta' => $data_peserta
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.peserta.create');
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
        Peserta::create([
            'nama_peserta'  => $request->nama_peserta,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan'  => $request->tinggi_badan,
            'berat_badan'   => $request->berat_badan,
            'no_telpon'     => $request->no_telpon,
            'alamat'        => $request->alamat
        ]);

        return redirect()->route('admin.peserta.index');
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
        $peserta =  Peserta::find($id);

        return view('admin.peserta.edit')->with(compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
        $peserta->update([
            'nama_peserta'  => $request->nama_peserta,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan'  => $request->tinggi_badan,
            'berat_badan'   => $request->berat_badan,
            'no_telpon'     => $request->no_telpon,
            'alamat'        => $request->alamat
        ]);

        return redirect()->route('admin.peserta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
        $peserta->delete();

        return redirect()->route('admin.peserta.index');
    }

    public function detail(Peserta $peserta)
    {
        return view('admin.peserta.detail')->with(compact('peserta'));
    }
}