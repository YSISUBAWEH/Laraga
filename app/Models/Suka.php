<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suka extends Model
{
    use HasFactory;

    protected $table = 'suka';

    // Define the fillable columns
    protected $fillable = [
        'file_id', 'users_id',
    ];

    // Relationships
    public function file()
    {
        return $this->belongsTo(File::class, 'file_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
