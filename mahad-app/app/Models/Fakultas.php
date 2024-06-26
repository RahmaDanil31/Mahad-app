<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';
    protected $fillable = ['nama'];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class);
    }
}
