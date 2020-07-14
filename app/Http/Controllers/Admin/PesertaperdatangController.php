<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pesertaperdatang;
use PhpParser\Node\Stmt\Return_;

class PesertaperdatangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data_pesertaperdatang = \App\Pesertaperdatang::all();

        return view('admin.pesertaperdatang.index', [
            'data_pesertaperdatang' => $data_pesertaperdatang
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
        return view('admin.pesertaperdatang.create');
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
        Pesertaperdatang::create([
            'nama_peserta'  => $request->nama_peserta,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan'  => $request->tinggi_badan,
            'berat_badan'   => $request->berat_badan,
            'no_telpon'     => $request->no_telpon,
            'alamat'        => $request->alamat
        ]);

        return redirect()->route('admin.pesertaperdatang.index');
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
    public function edit(Pesertaperdatang $pesertaperdatang)
    {
        //
        return view('admin.pesertaperdatang.edit')
            ->with(compact('pesertaperdatang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesertaperdatang $pesertaperdatang)
    {
        //
        $pesertaperdatang->update([
            'nama_peserta'  => $request->nama_peserta,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tinggi_badan'  => $request->tinggi_badan,
            'berat_badan'   => $request->berat_badan,
            'no_telpon'     => $request->no_telpon,
            'alamat'        => $request->alamat
        ]);

        return redirect()->route('admin.pesertaperdatang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesertaperdatang $pesertaperdatang)
    {
        //
        $pesertaperdatang->delete();

        return redirect()->route('admin.pesertaperdatang.index');
    }

    public function detail(Pesertaperdatang $pesertaperdatang)
    {
        return view('admin.pesertaperdatang.detail')
            ->with(compact('pesertaperdatang'));
    }
}