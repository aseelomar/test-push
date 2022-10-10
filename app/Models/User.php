<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
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
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function publication()
    {
        return $this->hasMany(Publication::class);
    }

    public function Attachment()
    {
        return $this->hasMany(Attachment::class);
    }
    public function job()
    {
        return $this->hasMany(Job::class);
    }

    public function municipalCouncilMember()
    {
        return $this->hasMany(MunicipalCouncilMember::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
    public function poster()
    {
        return $this->hasMany(Poster::class);
    }

}
