<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['id','regency_id','name'];
    // protected $timestamps = 'false';
}
