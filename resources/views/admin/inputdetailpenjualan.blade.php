@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Detail Penjualan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($DetailPenjualan))?route('detailpenjualan.update',$DetailPenjualan->id_detailpenjualan):route('DetailPenjualan.store')}}" method="POST">
        @csrf
        @if(isset($DetailPenjualan))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">ID Obat</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($DetailPenjualan))?$DetailPenjualan->id_obat:old('id_obat')}}" name="id_obat" class="form-control">
                    @error('id_obat')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID Penjualan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($DetailPenjualan))?$DetailPenjualan->id_penjualan:old('id_penjualan')}}" name="id_penjualan" class="form-control">
                    @error('id_penjualan')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Harga</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($DetailPenjualan))?$DetailPenjualan->harga:old('harga')}}" name="harga" class="form-control">
                    @error('harga')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Diskon</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($DetailPenjualan))?$DetailPenjualan->diskon:old('diskon')}}" name="diskon" class="form-control">
                    @error('diskon')<small style="color:red">{{$message}}</small>@enderror
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