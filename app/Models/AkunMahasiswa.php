<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AkunMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama','tglLahir','password','locate_id'];

    public function locate(): BelongsTo
    {
        return $this->belongsTo(locate::class);
    }
}
