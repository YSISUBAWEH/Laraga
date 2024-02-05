<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'file';

    // Define the fillable columns
    protected $fillable = [
        'namaFile', 'lokasiFile', 'deskFile', 'album_id', 'users_id', 'kategori_id',
    ];

    // Relationships
    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function likes()
    {
        return $this->hasMany(Suka::class, 'file_id');
    }

    public function comments()
    {
        return $this->hasMany(Komentar::class, 'file_id');
    }
}
