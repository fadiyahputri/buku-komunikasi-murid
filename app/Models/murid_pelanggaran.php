<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid_pelanggaran extends Model
{
    use HasFactory;
    public $table = "murid_pelanggaran";
    protected $guarded = ['id'];
    
}
