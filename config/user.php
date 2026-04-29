<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
  /**
   * Атрибуты, для которых разрешено массовое назначение.
   *
   * @var array
   */
  protected $fillable = ['name'];
}