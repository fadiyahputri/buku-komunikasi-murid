<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus_murid extends Model
{
    use HasFactory;
    public $table = "kasus_murid";
    protected $guarded = ['id'];
}
