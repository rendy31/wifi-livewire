<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama','password','lokasi'];
}
