<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeZone extends Model
{

  protected $guarded = ['id'];

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'time_zones';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'state',
    'time_diff',
  ];

}
