<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $table="user_details";

    protected $fillable = [
    		'id',
            'name',
            'email',
            'phone',
            'college_name',
            'address',
            'state',
            'pincode',
            'discipline',
            'department',
            'eyrc',
            'eyic',
            'other',
            'emp_field',
            'emp_organization',
            'designation',
            'salary'
            ];

}
