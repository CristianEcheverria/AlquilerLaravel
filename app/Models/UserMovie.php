<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMovie extends Model
{
    protected $table = 'user_movies';
    protected $fillable = ['name','email','password','status_id','role_id'];
    protected $guarded = ['id'];
}
