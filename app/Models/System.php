<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = ['en_title','ar_title','en_description','ar_description','en_address','en_footer','ar_footer','image'];

}
