<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConnectUs extends Model
{
    use HasFactory,SoftDeletes;

    protected $table    ='connect_us';

    protected $fillable =['linkFacebook','linkTwitter','linkYoutube','address','phone','aboutUs'];


}
