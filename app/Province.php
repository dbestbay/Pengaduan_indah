<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'indoregion_provinces';
    protected $fillable = ['id','name'];
    // protected $timestamps = 'false';
}
