<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['en_title','ar_title','en_description','ar_description','image'];
}
