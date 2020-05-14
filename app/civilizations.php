<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class civilizations extends Model
{
    protected $table = 'civilizations';
    protected $fillable = ['name', 'desc'];
}
