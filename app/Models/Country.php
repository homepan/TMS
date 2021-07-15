<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  protected $guarded = ['id'];
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'countries';
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'code', 
    'name', 
    'code_iso3', 
    'prohibited',
    'review',
  ];
}
