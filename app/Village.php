<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'indoregion_villages';
    protected $fillable = ['id','district_id','name'];
}
