<?php

namespace App\Models;
use App\Models\CampGround ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = "images";

    protected $fillable = ['image','campGround_id'];

    public function campGround(){
        return $this->belongsTo(CampGround::class,'campGound','id');
    }
}
