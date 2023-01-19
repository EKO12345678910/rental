<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;
    protected $table ="mobils";
    protected $guarded = ['id'];

    public function pesanan()
    {
        return $this->hasMany(pesanan::class);
    }
}
