@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Penjualan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($Penjualan))?route('penjualan.update',$Penjualan->id_penjualan):route('penjualan.store')}}" method="POST">
        @csrf
        @if(isset($Penjualan))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Jumlah Barang</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Penjualan))?$Penjualan->quantity:old('quantity')}}" name="quantity" class="form-control">
                    @error('quantity')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tanggal Penjualan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Penjualan))?$Penjualan->tanggalPenjualan:old('tanggalPenjualan')}}" name="tanggalPenjualan" class="form-control">
                    @error('tanggalPenjualan')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID Karyawan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Penjualan))?$Penjualan->id_karyawan:old('id_karyawan')}}" name="id_karyawan" class="form-control">
                    @error('id_karyawan')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID Pelanggan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Penjualan))?$Penjualan->id_pelanggan:old('id_pelanggan')}}" name="id_pelanggan" class="form-control">
                    @error('id_pelanggan')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Harga Total</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Penjualan))?$Penjualan->hargatotal:old('hargatotal')}}" name="hargatotal" class="form-control">
                    @error('hargatotal')<small style="color:red">{{$message}}</small>@enderror
                </div>
               
            </div>
            
            
            <div class="form-group">
                <button type="submit">SIMPAN</button>
            </div>
        </div>

    </form>    
    </div>
</div>    
@endsection