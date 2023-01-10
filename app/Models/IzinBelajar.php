<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IzinBelajar extends Model
{
    use HasFactory;
    protected $table = "pengajuan_izin_belajar";
    public $timestamps = false;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'nip', 'nip');
    }
}
