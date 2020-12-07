<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statuse extends Model
{
    protected $table = 'statuses';
    protected $fillable = ['name','type_status_id'];
    protected $guarded = ['id'];
}
