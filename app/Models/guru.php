<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{

    public $table = "gurus";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama_guru', 'mata_pelajaran','email', 'password', 'nip', 'alamat',
    ];

    public function kelas(){
        return $this->hasMany(kelas::class);  
    }

    public function RelasiToKelas(){
        return $this->hasMany('App\Models\kelas');
    }
    // public function kelas(){
    //     return $this->hasMany('App\Models\kelas');
    // }

    // public function kelas(){
    //     return $this->hasOne('App\Models\kelas');
    // }
}
