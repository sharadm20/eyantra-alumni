<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeFacility extends Model
{
    //
    protected $table="college_facility";
    protected $fillable = [
    		'id',
            'activity',

                'scenario',
                'clg_facilitate',
                'elsi_clg',
            'lab_timing',
            'lab_incharge',
            'lab_about',
            ];
}
