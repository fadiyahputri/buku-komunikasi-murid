<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class murid extends Model
{
    public $table = "murid";
    protected $primarykey = "id";
    protected $fillable = [
        'nama_murid', 'kelas_id', 'nisn', 'jenis_kelamin', 'alamat', 'no_telp', 'email', 'password', 'point'
    ];

    public function RelasiToKelas(){
        return $this->belongsTo(kelas::class ,'kelas_id');  
    }

    public function RelasiToGuru2(){
        return $this->belongsTo('App\Models\guru' ,'id');  
    }

    
}
