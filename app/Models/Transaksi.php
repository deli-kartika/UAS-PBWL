<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table ="tb_transaksi";

    protected $primaryKey = "transaksi_id";

    protected $guarded = [];

    protected $fillabel = ['transaksi_id','anggota_id','id_iuran','jumlah_iuran','transaksi_tgl_bayar','tanggal_jatuhtempo'];

    public static $rules = [

        'anggota_id' => 'required',
    ];

    protected $casts = [  
    ];

    public function Anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id','id_anggota');
    }
    public function Iuran()
    {
        return $this->belongsTo(Iuran::class, 'id_iuran','iuran_id');
    }
}
