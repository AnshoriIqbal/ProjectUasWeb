<?php

namespace App\Http\Controllers;

use App\DetailPenjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class DetailPenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('admin')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup akses');
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='detailpenjualan';
        $DetailPenjualan=DetailPenjualan::paginate(3);
        return view('admin.detailpenjualan',compact('title','DetailPenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input detailpenjualan';
        return view('admin.inputdetailpenjualan',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=>'Kolom :attribute harus lengkap',
            'date'    =>'Kolom :attribute harus Tanggal',
            'numeric' =>'Kolom :attribute harus Angka',
        ];
        $validasi = $request->validate([ 
            'id_obat'=>'numeric',
            'id_penjualan'=>'numeric',
            'harga'=>'numeric',
            'diskon'=>'numeric',
            
        ],$messages);

        DetailPenjualan::create($validasi);
        return redirect('detailpenjualan')->with('succes','data berhasil di update');
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
        $title='Input detailpenjualan';
        $DetailPenjualan=DetailPenjualan::find($id);
        return view('admin.detailpenjualan',compact('title','detailpenjualan'));
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
        $messages = [
            'required'=>'Kolom :attribute harus lengkap',
            'date'    =>'Kolom :attribute harus Tanggal',
            'numeric' =>'Kolom :attribute harus Angka',
        ];
        $validasi = $request->validate([ 
            'id_obat'=>'numeric',
            'id_penjualan'=>'numeric',
            'harga'=>'numeric',
            'diskon'=>'numeric',
            
        ],$messages);

        DetailPenjualan::whereid_detailpenjualan($id)->update($validasi);
        return redirect('detailpenjualan')->with('succes','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetailPenjualan::whereid_detailpenjualan($id)->delete();
        return redirect('detailpenjualan')->with('succes','data berhasil di update'); 
    }
}
