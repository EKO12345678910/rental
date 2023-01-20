<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    
    protected $table ="orders";
    protected $guarded = ['id'];

    public function days()
    {
        return $this->belongsTo(day::class);
    }

    public function cars()
    {
        return $this->belongsTo(car::class);
    }
}
