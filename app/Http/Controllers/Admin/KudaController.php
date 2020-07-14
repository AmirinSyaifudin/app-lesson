<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kuda;

class KudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_kuda = \App\Kuda::all();


        return view('admin.kuda.index', ['data_kuda' => $data_kuda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kuda.create');
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


        // $kuda = new Kuda();

        // $kuda->nama_kuda = $request->nama_kuda;
        // $kuda->jenis_kuda = $request->jenis_kuda;
        // $kuda->save();

        Kuda::create([
            'nama_kuda'     => $request->nama_kuda,
            'jenis_kuda'    => $request->jenis_kuda
        ]);

        return redirect()->route('admin.kuda.index');
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
        // return view('admin.kuda.edit', [
        //     'kuda' => $kuda,
        // ]);


        $kuda = Kuda::find($id);

        return view('admin.kuda.edit')->with(compact('kuda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuda $kuda)
    {
        //
        $kuda->update([
            'nama_kuda'     => $request->nama_kuda,
            'jenis_kuda'    => $request->jenis_kuda
        ]);

        return redirect()->route('admin.kuda.index');
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
        $kuda = Kuda::where('id', $id)->first();
        $kuda->delete();

        return redirect()->route('admin.kuda.index');
    }
}