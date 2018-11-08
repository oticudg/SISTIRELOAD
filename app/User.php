<?php

namespace Sisti;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'last_name', 'email', 'password','type',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function new_indexes()
    {
        return $this->hasMany(NewIndex::class);
    }

    public function admin()
    {
        return $this->type === 'admin';
    }
}