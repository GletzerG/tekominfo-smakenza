<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    /**
     * Kolom yang bisa diisi (mass assignable).
     */
    protected $fillable = [
        'user_id',
        'action',
        'type',
    ];

    /**
     * Relasi ke user yang melakukan aktivitas ini.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
