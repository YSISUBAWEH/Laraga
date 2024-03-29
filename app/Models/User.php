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

    protected $fillable = [
        'username', 'email', 'password', 'namaLengkap', 'alamat', 'level',
    ];

    // Relationships
    public function albums()
    {
        return $this->hasMany(Album::class, 'users_id');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'users_id');
    }

    public function likes()
    {
        return $this->hasMany(Suka::class, 'users_id');
    }

    public function comments()
    {
        return $this->hasMany(Komentar::class, 'user_id');
    }

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
}
