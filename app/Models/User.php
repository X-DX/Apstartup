<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'set',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function application()  //one to one
    {
        return $this->hasOne('App\Models\Application');
    }
    public function sectionb()  //one to one
    {
        return $this->hasOne('App\Models\sectionb');
    }
    public function sectionc()  //one to one
    {
        return $this->hasOne('App\Models\sectionc');
    }
    public function sectiond()  //one to one
    {
        return $this->hasOne('App\Models\sectiond');
    }
}
