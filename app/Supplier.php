<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table='supplier';
    protected $primaryKey='Id_Supplier';
    protected $fillable=['namaSupplier','alamat','noTelp'];
}
