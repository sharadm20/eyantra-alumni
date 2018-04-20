<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CollegeFacility extends Model
{
    //
    protected $table="user_college_facility";
    protected $fillable = [
    		'id',
            'user_id',
            'activity',
            'scenario',
            'clg_facilitate',
            'elsi_clg',
            'lab_timing',
            'lab_incharge',
            'lab_about',
            ];
}
