<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'pakets';
    protected $fillable = ['nama','harga','promo','jmluser','ket'];
}
