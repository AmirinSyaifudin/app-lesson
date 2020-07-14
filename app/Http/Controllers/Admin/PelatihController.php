<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pelatih;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data_pelatih = \App\Pelatih::all();


        return view('admin.pelatih.index', ['data_pelatih' => $data_pelatih]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pelatih.create');
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
        Pelatih::create([
            'nama_pelatih'  => $request->nama_pelatih,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telpon'     => $request->no_telpon,
            'alamat'        => $request->alamat
        ]);

        return redirect()->route('admin.pelatih.index');
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
        $pelatih = Pelatih::find($id);

        return view('admin.pelatih.edit')->with(compact('pelatih'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelatih $pelatih)
    {
        //
        $pelatih->update([
            'nama_pelatih'  => $request->nama_pelatih,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telpon'     => $request->no_telpon,
            'alamat'        => $request->alamat
        ]);

        return redirect()->route('admin.pelatih.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatih $pelatih)
    {
        //
        // $pelatih = Pelatih::where('id', $id)->first();
        $pelatih->delete();

        return redirect()->route('admin.pelatih.index');
    }
}