<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';
    protected $fillable = ['nama', 'gedung_id'];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }
}
