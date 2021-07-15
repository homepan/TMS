<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'vouchers';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title', 
    'code',
    'code_type',
    'description',  
    'value',
    'start_date',
    'expiry_date',
    'used_count',
    'used_limit',
    'discount_type_id',
    'active',
    'parent_id',
  ];
  
  public function discount_type()
  {
    return $this->belongsTo('App\Models\DiscountType', 'discount_type_id');
  }
  
  public function rewards()
  {
    return $this->belongsToMany('App\Models\Reward', 'reward_voucher');
  }
  
  public function ref_voucher() 
  {
    return $this->belongsTo('App\Models\Voucher', 'parent_id');
  }
}
