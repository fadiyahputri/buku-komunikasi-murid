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
        'nama_murid', 'kelas_id', 'nisn', 'jenis_kelamin', 'alamat', 'no_telp', 'email', 'password', 
    ];

    public function RelasiToKelas(){
        return $this->belongsTo('App\Models\kelas' ,'id');  
    }

    public function RelasiToGuru2(){
        return $this->belongsTo('App\Models\guru' ,'id');  
    }

    public function RelasiToMuridpelanggaran() {
        return $this->belongsToMany(pelanggaran::class, 'pelanggaran', 'point');  
    }
}
