<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class LaraUser extends Authenticatable
{
    Use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
    'password',
    'remember_token',
];

    protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
];
}
