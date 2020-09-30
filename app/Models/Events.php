<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['en_title','ar_title','en_description','ar_description','en_address','ar_address','image','email','date','time','phone','status'];
}
