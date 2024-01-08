<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    protected $table = "tb_iuran";

    protected $primaryKey = "iuran_id";

    protected $guarded = [];
}
