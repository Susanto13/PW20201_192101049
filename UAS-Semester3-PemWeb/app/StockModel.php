<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockModel extends Model
{
    protected $table = 'stock';
    protected $fillable = ['kelas', 'jumlah', 'harga'];
}
