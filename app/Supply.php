<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    //
    protected $table='supply';
    protected $primaryKey='Id_Supply';
    protected $fillable=['quantity','hargatotal','tanggalOrder','tanggalPenerimaan','tanggalBayar','Id_Karyawan','Id_Supplier','id_obat'];
}

