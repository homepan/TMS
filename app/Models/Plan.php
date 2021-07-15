<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'plans';

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
    'address_limit',  
    'shipment_limit', 
    'api_limit', 
    'freight_discount', 
    'satchel', 
    'sms_cost', 
    'admin_fee', 
    'active', 
    'status',
    'campaign_id',
  ];
  
  public function accounts()
  {
    return $this->belongsToMany('App\Models\Account', 'account_plan', 'plan_id', 'account_id');
  }
  
  public function features()
  {
    return $this->belongsToMany('App\Models\Feature', 'plan_feature', 'plan_id', 'feature_id');
  }
  
  public function saveFeatures($features)
  {
    if (!empty($features)) {
      $this->features()->sync($features);
    } else {
      $this->features()->detach();
    }
  }
}
