<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasBelajar extends Model
{
    use HasFactory;
    protected $table = "pengajuan_tugas_belajar";
    public $timestamps = false;
    protected $guarded = ['id'];

    public function user(){
          return $this->belongsTo(User::class, 'nip');
    }
}
