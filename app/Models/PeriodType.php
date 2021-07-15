<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeriodType extends Model
{
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'period_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'description', 'payment_period', 'discount_percentage',
  ];
}
