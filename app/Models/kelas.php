<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    public $table = "kelas";
    protected $primarykey = "id";
    protected $fillable = [
         'id', 'kelas', 'guru_id',
    ];

    

    // public function RelasiToGuru(){
    //     return $this->belongsTo('App\Models\guru');
    // }

    public function RelasiToMurid(){
        return $this->hasMany('App\Models\murid');
    }

    public function RelasiToGuru(){
        return $this->belongsTo(Guru::class, 'guru_id' );
    }

    // public  function guru() {
    //     return $this -> belongsTo('App\Models\guru');
    // }
}
