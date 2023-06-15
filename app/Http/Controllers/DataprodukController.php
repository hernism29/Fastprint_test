<?php

namespace App\Http\Controllers;

use App\Models\Dataproduk;
use Illuminate\Http\Request;

class DataprodukController extends Controller
{
    public function index(){
        $dataproduk = Dataproduk::where('status', 'bisa dijual')
        ->get();
        // $dataproduk = Dataproduk::all();
        return view('dataproduk.index',compact(['dataproduk']));
    }
    public function create(){
        return view('dataproduk.create');
    }

    public function store(Request $request){

        $request->validate([
            'nama_produk' =>'required|string',
            'harga' =>'required|integer',

        ]);

        Dataproduk::create($request->except(['_token', 'submit']));
        return redirect ('dataproduk');


    }
    public function edit($id){
        $dataproduk = Dataproduk::find($id);
        //dd($dataproduk);
        return view('dataproduk.edit',compact(['dataproduk']));
    }

    public function update($id, Request $request){

        $dataproduk = Dataproduk::find($id);
        $dataproduk->update($request->except(['_token','submit']));
        return redirect ('/dataproduk');
    }

    public function destroy($id){
        $dataproduk = Dataproduk::find($id);
        $dataproduk->delete();

        //return response()->json(['status' => 'Data Berhasil di hapus']);
        return redirect ('/dataproduk');
    }

}

