<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StockModel;
use App\KelasModel;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StockModel::all();
        $kelas = KelasModel::all();
        return view('pages.stock.index', ['data'=>$data,'kelas'=>$kelas]);
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
        $this->validate($request, [
            'kelas'=>'required',
            'jumlah'=>'required',
            'harga'=>'required',
        ]);
        StockModel::create($request->all());
        return redirect()->route('stock.index')->withMessage("Stock Berhasil ditambahkan");
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
        $data = StockModel::find($id);
        $kelas = KelasModel::all();
        return view('pages.stock.edit', ['data'=>$data, 'kelas'=>$kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockModel $stockModel, $id)
    {
        // dd($request);
        StockModel::find($id)->update($request->except('_token','_method'));
        return redirect()->route('stock.index')->withMessage('Stock Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // $stockModel->delete();
        // return back();
        StockModel::find($id)->delete();
        return back()->withMessage('Stock Terhapus!');
    }
}
