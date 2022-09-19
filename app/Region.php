<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    protected $fillable = ['region_name,region_code,status'];
    protected $primarykey = 'region_id';
}
