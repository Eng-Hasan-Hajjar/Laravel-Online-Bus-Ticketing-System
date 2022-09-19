<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Region extends Model
{
    protected $table = 'sub_regions';
    protected $fillable = ['sub_region_name,sub_region_code,region_id,status'];
    protected $primarykey = 'sub_region_id';
}
