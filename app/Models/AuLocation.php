<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuLocation extends Model
{
  public $timestamps = false;
  protected $guarded = ['id'];

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'au_locations';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'postcode',
    'suburb',
    'state',
    'comments',
    'delivery_office',
    'pre_sort_indicator',
    'parcel_zone',
    'bsp_number',
    'bsp_name',
    'category',
    'new_eta_zone',
  ];

}
