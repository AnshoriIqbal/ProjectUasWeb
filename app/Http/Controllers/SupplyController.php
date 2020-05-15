<?php

namespace App\Http\Controllers;

use App\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class SupplyController extends Controller
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
        $title='supply';
        $Supply=Supply::paginate(3);
        return view('admin.supply',compact('title','Supply'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input supply';
        return view('admin.inputsupply',compact('title'));
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
            'quantity'=>'required',
            'hargatotal'=>'required',
            'tanggalOrder'=>'required',
            'tanggalPenerimaan'=>'required',
            'tanggalBayar'=>'required',
            'Id_Karyawan'=>'required',
            'Id_Supplier'=>'required',
            'id_obat'=>'required',
            
            
        ],$messages);

        Supply::create($validasi);
        return redirect('supply')->with('succes','data berhasil di update');
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
        $title='Input supply';
        $Supply=Supply::find($id);
        return view('admin.inputsupply',compact('title','supply'));
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
            'quantity'=>'required',
            'hargatotal'=>'required',
            'tanggalOrder'=>'required',
            'tanggalPenerimaan'=>'required',
            'tanggalBayar'=>'required',
            'Id_Karyawan'=>'required',
            'Id_Supplier'=>'required',
            'id_obat'=>'required',
            
        ],$messages);

        Supply::whereId_Supply($id)->update($validasi);
        return redirect('supply')->with('succes','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supply::whereId_Supply($id)->delete();
        return redirect('supply')->with('succes','data berhasil di update'); 
    }
}


