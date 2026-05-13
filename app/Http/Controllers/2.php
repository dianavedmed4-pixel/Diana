<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
  /**
   * Атрибуты, для которых запрещено массовое назначение.
   *
   * @var array
   */
  protected $guarded = ['price'];
}