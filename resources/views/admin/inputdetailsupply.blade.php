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
    <form action="{{(isset($DetailSupply))?route('detailsupply.update',$etailSupply->Id_detailsupply):route('DetailSupply.store')}}" method="POST">
        @csrf
        @if(isset($DetailSupply))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">ID Supply</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($DetailSupply))?$DetailSupply->Id_Suppy:old('Id_Supply')}}" name="Id_Supply" class="form-control">
                    @error('Id_Supply')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID Obat</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($DetailSupply))?$DetailSupply->id_obat:old('id_obat')}}" name="id_obat" class="form-control">
                    @error('id_obat')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">ID Detail Penjualan</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($DetailSupply))?$V->harga:old('Id_detailpenjualan')}}" name="Id_detailpenjualan" class="form-control">
                    @error('Id_detailpenjualan')<small style="color:red">{{$message}}</small>@enderror
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