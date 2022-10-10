<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMedia extends Model
{
    use HasFactory, softDeletes;

    const TYPE_FACEBOOK     = 1;
    const TYPE_INSTAGRAM    = 2;
    const TYPE_TWITTER      = 3;
    const TYPE_LINKEDIN     = 4;

    const TYPES = [
        self::TYPE_FACEBOOK, self::TYPE_INSTAGRAM, self::TYPE_TWITTER, self::TYPE_LINKEDIN
    ];

    protected $fillable = ['name', 'active'];


}
