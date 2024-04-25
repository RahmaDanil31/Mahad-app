<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'nim',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'slta',
        'telepon',
        'pendidikan_pesantren',
        'kamar_id',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ortu',
        'alamat_ortu',
        'jalur_masuk',
        'riwayat_penyakit',
        'status',
        'wa',
        'wa_ortu',
        'telepon_ortu',
        'jurusan_id',
        'path_file',
        'path_foto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole($role)
    {
        return $this->role->name === $role;
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
