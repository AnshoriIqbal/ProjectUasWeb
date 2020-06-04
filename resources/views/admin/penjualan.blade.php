@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Data Penjualan
        </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <div class="panel-body">
            
            <div class="col-lg-12">
            <a href="{{route('penjualan.create')}}">Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>No</th><th>Jumlah Barang</th><th>Tanggal Penjualan</th><th>ID Karyawan</th><th>ID Pelanggan</th><th>Harga Total</th><th>Aksi</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($Penjualan as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->quantity}}</td><td>{{$val->tanggalPenjualan}}</td><td>{{$val->id_karyawan}}</td><td>{{$val->id_pelanggan}}</td><td>{{$val->hargatotal}}</td>
                        <td>
                        <a href="{{route('penjualan.edit',$val->id_penjualan)}}"><button type="submit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                        <form action="{{route('penjualan.destroy', $val->id_penjualan)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$Penjualan->links()}}
            </div>
        </div>
    </div>
</div>
@endsection