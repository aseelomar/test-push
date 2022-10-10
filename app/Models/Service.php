<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name','description','user_id','slug','active','image'];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::creating(function ($service) {
            $service->slug = str_slug($service->name, '-', config('locale'));
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeService($q)
    {
        return $q->where(
            'active' ,true
                    );
    }
}