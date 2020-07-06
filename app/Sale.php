<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'pdsales'; 

    protected $fillable = ['name', 'description'];
}
