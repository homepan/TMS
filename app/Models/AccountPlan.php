<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountPlan extends Model
{
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'account_plans';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'plan_id', 
    'account_id', 
    'period_type_id', 
    'invoice_id',
    'start_date', 
    'end_date', 
    'stop_date', 
    'shipment_count', 
    'comments', 
    'status', 
    'auto_renew', 
    'reminder', 
    'active',
  ];
  
  public function plan()
  {
    return $this->belongsTo('App\Models\Plan', 'plan_id');
  }
  
  public function account()
  {
    return $this->belongsTo('App\Models\Account', 'account_id');
  }
  
  public function period_type()
  {
    return $this->belongsTo('App\Models\PeriodType', 'period_type_id');
  }
  
  public function invoice()
  {
    return $this->belongsTo('App\Models\Invoice', 'invoice_id');
  }
  
  public function addons()
  {
    return $this->belongsToMany('App\Models\Addon', 'account_plan_addons', 'account_plan_id', 'addon_id');
  }

}
