<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
  public $timestamps = true;
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'branches';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'account_id', 
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
  ];
  
  public function account()
  {
    return $this->belongsTo('App\Models\Account', 'account_id');
  }

}
