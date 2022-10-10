<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeopleContactUs extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable = ['name','email','phone','subject','message'];
    protected $table = 'people_contact_us';
}
