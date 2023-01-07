<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
      use HasApiTokens, HasFactory, Notifiable;
      protected $table = "user";
      public $timestamps = false;
      protected $guarded = ['id'];

      protected $hidden = ['password'];

      public function pengajuanku()
      {
            return $this->hasMany(Pengajuanku::class, 'nip');
      }

      public function notifikasi()
      {
            return $this->hasMany(Notifikasi::class, 'nip');
      }

      public function izin_belajar()
      {
            return $this->hasMany(IzinBelajar::class, 'nip');
      }

      public function tugas_belajar()
      {
            return $this->hasMany(TugasBelajar::class, 'nip');
      }
}
