<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =['description','user_id','title','link','image','active'];

    public function getHumansDateAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat( 'l / j F, Y' );
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
