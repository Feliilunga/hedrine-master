<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name','firstname','team','tel1','tel2', 'email', 'password', 'is_active','role_id'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function herbs()
    {
        return $this->hasMany(Herb::class);
    }

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }

    public function dinteractions(){
        return $this->hasMany(Dinteraction::class);
    }
    public function hinteractions(){
        return $this->hasMany(Hinteraction::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function targets()
    {
        return $this->hasMany(Target::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id','id');
    }
}
