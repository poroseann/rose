<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'hospital_name',
        'hospital_desc',
        'hospital_addr',
        'category',
        'map_link',
        'picture',
        'level',
        'is_delete'
    ];
}
