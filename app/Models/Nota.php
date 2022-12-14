<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'nota';
    protected $guarded = [];

    public function suratjalan()
    {
        $this->hasMany(Suratjalan::class);
    }
}
