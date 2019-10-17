<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'dob',
        'comments',
    ];
}
