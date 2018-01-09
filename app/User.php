<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','email','password'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'users';
}
