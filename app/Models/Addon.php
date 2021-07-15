<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
  protected $guarded = ['id'];

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'addons';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'title',
    'description',
    'cost',
    'freight_discount',
    'active',
    'hidden',
  ];
  
  public function account_plans()
  {
    return $this->belongsToMany('App\Models\AccountPlan', 'account_plan_addons', 'addon_id', 'account_plan_id');
  }
}
