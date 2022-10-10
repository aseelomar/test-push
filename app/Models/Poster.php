<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poster extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title','slug','description','active','user_id','image'];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::creating(function ($poster) {
            $poster->slug = str_slug($poster->title, '-', config('locale'));
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePoster($q)
    {
        return $q->where('active',true);
    }
}