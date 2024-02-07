<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function enroll(){
        return $this->hasMany(Enroll::class);
    }

    public function ept_answer(){
        return $this->hasMany(ept_answer::class);
    }

    public function toeic_answer(){
        return $this->hasMany(toeic_answer::class);
    }

    public function EptQuestionAudio(){
        return $this->hasMany(EptQuestionAudio::class);
    }

    public function EptStoryAudio(){
        return $this->hasMany(EptStoryAudio::class);
    }
}
