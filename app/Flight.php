<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
  protected $fillable = [
    'code_departure',
    'code_arrival',
    'price'
  ];
}
