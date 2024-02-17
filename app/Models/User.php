<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles as HasRoles;


class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = ['login', 'password'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function storages()
    {
        return $this->hasMany(Storage::class);
    }
}
