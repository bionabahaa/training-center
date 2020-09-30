<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = ['en_name','ar_name','en_message','ar_message','email'];
}
