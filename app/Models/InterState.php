<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterState extends Model
{
  protected $guarded = ['id'];
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'inter_states';
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'country_code',
    'country_name',
    'state',
    'status',
  ];
}
