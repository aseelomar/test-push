<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Crypt;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    const TYPE_NEWS = 1;
    const TYPE_ACTIVITIES = 2;
    const TYPE_EVENTS =3;
    const TYPE_ADVERTISING =4;
    const TYPE_BIDS =5;
    const TYPE_IMAGE =6;
    const TYPE_VIDEO =7;
    const TYPE_STRATEGIC_PLAN =8;
    const TYPE_MANAGEMENT_REPORTS =9;
    const TYPE_MUNICIPAL_STRUCTURE =10;


    protected $fillable =
        [
            'name','update_id','user_id','active','active'
        ];
    protected $appends =
        [
          'id_hash'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attachment()
    {
        return $this->hasMany(Attachment::class);
    }
    public function getIdHashAttribute()
    {
        return Crypt::encrypt($this->id);
    }


    public function scopeCategory($q)
    {
        return $q->where('active',true);
    }
}
