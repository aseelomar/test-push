<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MunicipalCouncilMember extends Model
{
    use HasFactory ,softDeletes;

    protected $fillable =
        [
        'name','certification','description','user_id','category_member_id','image','active','facebook','instagram','twitter','linkedin'
         ];

        protected $table = 'municipal_council_members';



        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function categoryMember()
        {
            return $this->belongsTo(CategoryMember::class);
        }


    public function scopeBoss($q)
    {
        return $q->where([
            'category_member_id' => CategoryMember::TYPE_BOSS,
            'active'=>true
        ]);
    }
    public function scopeBossVice($q)
    {
        return $q->where([
            'category_member_id' => CategoryMember::TYPE_BOSS_VICE,
            'active'=>true
        ]);
    }
    public function scopeSecretary($q)
    {
        return $q->where([
            'category_member_id' => CategoryMember::TYPE_SECRETARY,
            'active'=>true
        ]);
    }
    public function scopeMember($q)
    {
        return $q->where([
            'category_member_id' => CategoryMember::TYPE_MEMBER,
            'active'=>true
        ]);
    }
}
