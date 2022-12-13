<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    public $table = "pelanggaran";
    protected $guarded=['id'];

    // public function RelasiToDatakasus() {
    //     return $this->belongsToMany('App\Models\muridpelanggaran', 'id', 'pelanggaran', 'point' );  
    // }
}

