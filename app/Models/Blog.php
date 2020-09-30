<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['en_name','ar_name','en_description','ar_description','image','date'];
}
