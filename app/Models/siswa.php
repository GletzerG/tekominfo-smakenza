<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'nis', 
        'name', 
        'email'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
        
    
}
