<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $table = 'indoregion_regencies';
    protected $fillable = ['id','province_id','name'];
}
