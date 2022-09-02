<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }

    protected $appends = [
        'created_date',
        'created_time',
        'updated_date',
        'updated_time',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'preferences' => 'array',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'email_verified_at',
        'created_at',
        'updated_at',
        'password',
        'remember_token',
    ];

    /* Attributes */

    public function getCreatedDateAttribute(): string
    {
        return "{$this->created_at->format('d/m/Y')}" ;
    }

    public function getCreatedTimeAttribute(): string
    {
        return "{$this->created_at->format('H:i')}" ;
    }

    public function getUpdatedDateAttribute(): string
    {
        return "{$this->updated_at->format('d/m/Y')}" ;
    }

    public function getUpdatedTimeAttribute(): string
    {
        return "{$this->updated_at->format('H:i')}" ;
    }
}
