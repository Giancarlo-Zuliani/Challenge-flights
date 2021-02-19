<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
      'name',
      'code',
      'lat',
      'lon'
    ];
}
