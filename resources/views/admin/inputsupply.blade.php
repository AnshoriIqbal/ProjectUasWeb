@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($Supply))?route('supply.update',$Supply->id_supply):route('supply.store')}}" method="POST">
        @csrf
        @if(isset($Supply))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">ID Supplier</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->id_supplier:old('id_supplier')}}" name="id_supplier" class="form-control">
                    @error('id_supplier')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID Obat</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->id_obat:old('id_obat')}}" name="id_obat" class="form-control">
                    @error('id_obat')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Jumlah Barang</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->quantity:old('quantity')}}" name="quantity" class="form-control">
                    @error('quantity')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tanggal Order</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->tanggalOrder:old('tanggalOrder')}}" name="tanggalOrder" class="form-control">
                    @error('tanggalOrder')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tanggal Penerimaan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->tanggalPenerimaan:old('tanggalPenerimaan')}}" name="tanggalPenerimaan" class="form-control">
                    @error('tanggalPenerimaan')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Tanggal Pembayaran</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->tanggalBayar:old('tanggalBayar')}}" name="tanggalBayar" class="form-control">
                    @error('tanggalBayar')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Harga Total</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->hargatotal:old('hargatotal')}}" name="hargatotal" class="form-control">
                    @error('hargatotal')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID Karyawan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($Supply))?$Supply->id_karyawan:old('id_karyawan')}}" name="id_karyawan" class="form-control">
                    @error('id_karyawan')<small style="color:red">{{$message}}</small>@enderror
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