<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryMember extends Model
{
    use HasFactory,SoftDeletes;

    const TYPE_BOSS = 1;
    const TYPE_BOSS_VICE = 2;
    const TYPE_SECRETARY = 3;
    const TYPE_MEMBER = 4;

    protected $table = 'category_members';

    protected $fillable = ['name','active'];

    public function municipalCouncilMembers()
    {
        return $this->hasMany(MunicipalCouncilMember::class,'category_member_id');
    }
}
