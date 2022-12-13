<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    use HasFactory;
    public $table = "kasus";
    protected $guarded = ['id'];

    public function kasuspelanggaran() {
        return $this->belongsToMany('App\Models\pelanggaran');  
    }
    public function kasusmurid() {
        return $this->belongsToMany('App\Models\murid');  
    }
}
