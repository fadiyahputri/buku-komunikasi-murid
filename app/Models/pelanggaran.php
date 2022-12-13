<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    public $table = "pelanggaran";
    protected $guarded=['id'];

    public function RelasiTomurids() {
        return $this->belongsToMany('App\Models\murid');  
    }
}

