<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuanku extends Model
{
    use HasFactory;
    protected $table = "pengajuanku";
    public $timestamps = false;
    protected $guarded = ['id'];

    public function user(){
          return $this->belongsTo(User::class, 'nip');
    }
}
