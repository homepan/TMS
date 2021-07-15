<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'rewards';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'discount_type_id',
    'token',
    'active',
  ];
  
  public function discount_type()
  {
    return $this->belongsTo('App\Models\DiscountType', 'discount_type_id');
  }
  
  public function vouchers()
  {
    return $this->belongsToMany('App\Models\Voucher', 'reward_voucher');
  }
  
  public function accounts()
  {
    return $this->belongsToMany('App\Models\Account', 'account_reward');
  }
  
  public function campaigns()
  {
    return $this->belongsToMany('App\Models\Campaign', 'campaign_reward');
  }
  
}
