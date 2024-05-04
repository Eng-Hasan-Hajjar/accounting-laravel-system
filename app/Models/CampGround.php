<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampGround extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'country','city',
        'region', 'cm_type', 'cm_season','campGround_image',

    ];
}
