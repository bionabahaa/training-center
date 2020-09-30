<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    protected $fillable = ['code','en_fname','ar_fname','en_lname','ar_lname','image','address','phone','email'
    ,'birthday','avilable_time','shortbio','salary'
    ];
}
