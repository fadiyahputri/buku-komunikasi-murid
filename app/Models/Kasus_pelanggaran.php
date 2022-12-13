<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus_pelanggaran extends Model
{
    use HasFactory;
    public $table = "kasus_pelanggaran";
    protected $guarded = ['id'];
}
