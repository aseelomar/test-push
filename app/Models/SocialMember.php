<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMember extends Model
{
    use HasFactory,SoftDeletes;

    protected $table    =   'social_members';
    protected $fillable =   ['municipal_council_member_id','social_media_id','link'];



    public function socialMedia()
    {
        return $this->hasMany(SocialMedia::class);
    }


}
