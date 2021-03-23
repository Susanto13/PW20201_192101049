<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DistribusiModel;
use App\KelasModel;

class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DistribusiModel::all();
        $kelas = KelasModel::all();
        return view('pages.distribusi.index', ['data'=>$data, 'kelas'=>$kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DistribusiModel::create($request->all());
        return redirect()->route('distribusi.index')->withMessage("Distribusi Berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DistribusiModel::find($id);
        $kelas = KelasModel::all();

        return view('pages.distribusi.edit', ['data'=>$data, 'kelas'=>$kelas]);   
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
        DistribusiModel::find($id)->update($request->except('_token', '_method'));
        return redirect()->route('distribusi.index')->withMessage('Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DistribusiModel::find($id)->delete();
        return back()->withMessage('Berhasil Dihapus!');
    }
}
