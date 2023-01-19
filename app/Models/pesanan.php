<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table ="pesanans";
    protected $guarded = ['id'];

    public function haris()
    {
        return $this->belongsTo(hari::class);
    }

    public function mobils()
    {
        return $this->belongsTo(mobil::class);
    }
}
