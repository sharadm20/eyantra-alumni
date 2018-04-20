<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $table="user_details";
    protected $primaryKey='id';
    protected $fillable = [
            'user_id',
            'name',
            'email',
            'phone',
            'college_name',
            'address',
            'state',
            'pincode',
            'discipline',
            'department',
            'gender',
            'eyrc',
            'eyic',
            'other',
            'emp_field',
            'emp_organization',
            'designation',
            'salary'
            ];

}
