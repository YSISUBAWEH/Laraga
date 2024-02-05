<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    // Define the fillable columns
    protected $fillable = [
        'namaKategori',
    ];

    // Relationships
    public function files()
    {
        return $this->hasMany(File::class, 'kategori_id');
    }
}
