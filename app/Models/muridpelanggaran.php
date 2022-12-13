<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class muridpelanggaran extends Model
{
    use HasFactory;
    public $table = "murid_pelanggaran";
    protected $primarykey = "id";
    protected $guarded=['id'];

    public function RelasiToPelanggaran() {
        return $this->belongsToMany('App\Models\Pelanggaran');  
    }

    public function RelasiToMurid() {
        return $this->belongsToMany('App\Models\murid');  
    }

    public function RelasiToMuridpelanggaran() {
        return $this->belongsToMany(pelanggaran::class, 'pelanggaran', 'point');  
    }
}
