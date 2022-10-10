<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Crypt;

class Attachment extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable =
        ['description','user_id','category_id','link','update_id','active','image'];

    protected $appends =
        [
            'id_hash'
        ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getIdHashAttribute()
    {
        return encrypt($this->id);
    }

    public function scopeVideo($q)
    {
        return $q->where([
            'category_id' => Category::TYPE_VIDEO,
            'active'=>true
        ]);
    }

    public function scopeImage($q)
    {
        return $q->where([
            'category_id' => Category::TYPE_IMAGE,
            'active'=>true
        ]);
    }

    public function scopeFileHierarchy($q)
    {
        return $q->where([
            'category_id' => Category::TYPE_MUNICIPAL_STRUCTURE,
            'active'=>true
        ]);
    }

    public function scopePlan($q)
    {
        return $q->where([
            'category_id' => Category::TYPE_STRATEGIC_PLAN,
            'active'=>true
        ]);
    }

    public function scopeReport($q)
    {
        return $q->where([
            'category_id' => Category::TYPE_MANAGEMENT_REPORTS,
            'active'=>true
        ]);
    }

    public function getHumansDateAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat( 'l / j F, Y' );
    }

}
