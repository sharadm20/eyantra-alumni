<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $table='user_feedbacks';
    protected $fillable=[
    		'id',
            'user_id',
            'q1',
            'q2',
            'q3',
            'q4',
            'q5',
            'q6',
            'q7',
            'q8',
            'q9',
            'q10',
            'q11',
            'q12',
            'q13',
            'q14',
            'q15',
            'q16',
            'q17',
];
}
