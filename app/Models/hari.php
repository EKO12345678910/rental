<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hari extends Model
{
    use HasFactory;
    protected $table ="haris";
    protected $guarded = ['id'];
    
    public function pesanan()
    {
        return $this->hasMany(pesanan::class);
    }
}