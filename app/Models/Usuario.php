<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'login',
        'password',
        'status'
    ];
}
