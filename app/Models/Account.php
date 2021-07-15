<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'accounts';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'code', 
    'acn',
    'name', 
    'contact_name', 
    'address1',
    'address2',
    'suburb',
    'state',
    'postcode',
    'country_code',
    'residential',
    'telephone', 
    'email', 
    'active',
    'parent_id',
    'ip',
  ];
  
  public function plans()
  {
    return $this->belongsToMany('App\Models\Plan', 'account_plans', 'account_id', 'plan_id');
  }
  
  public function users()
  {
    return $this->hasMany('App\Models\User');
  }
  
}
