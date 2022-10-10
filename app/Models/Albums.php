<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Albums extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'albums';
    protected $fillable = ['description','cover_photo','active','show_in_home','user_id'];

    public function photos()
    {
        return $this->hasMany(Photos::class, 'album_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeAlbumsShowInSlider($q)
    {
        return $q->where([
            'show_in_home'  => 1,
            'active'        =>true
        ]);
    }
    public function getHumansDateAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat( 'l / j F, Y' );
    }

}
