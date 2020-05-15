@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Data Supply
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
            <a href="{{route('supply.create')}}">Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>ID Supplier</th><th>ID Obat</th><th>Jumlah Barang</th><th>Tanggal Order</th><th>Tanggal Penerimaan Barang</th><th>Tanggal Bayar</th><th>Harga Total</th><th>ID Karyawan</th><th>Aksi</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($Supply as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->Id_Supplier}}</td><td>{{$val->id_obat}}</td><td>{{$val->quantity}}</td><td>{{$val->tanggalOrder}}</td><td>{{$val->tanggalPenerimaan}}</td><td>{{$val->tanggalBayar}}</td><td>{{$val->hargatotal}}</td><td>{{$val->Id_Karyawan}}</td>
                        <td>
                        <a href="{{route('supply.edit',$val->Id_Supply)}}">update</a>
                        <form action="{{route('supply.destroy', $val->Id_Supply)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$Supply->links()}}
            </div>
        </div>
    </div>
</div>
@endsection