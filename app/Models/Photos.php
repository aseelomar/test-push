<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photos extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'photos';
    protected $fillable = ['album_id', 'active', 'link'];

    public function album()
    {
        return $this->belongsTo(Albums::class);
    }
}
