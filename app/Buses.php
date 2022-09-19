<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    protected $table = 'buses';
    protected $fillable = ['bus_name,bus_code,operator_id,
                             total_seats,status'];
    protected $primarykey = 'bus_id';
}
