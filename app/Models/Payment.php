<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Log;

class Payment extends Model
{
  protected $guarded = ['id'];

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'payments';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'account_id',
    'user_id',
    'total',
    'payment_method',
    'payment_status',
    'payment_date',
    'transaction',
    'ref1',
    'ref2',
    'note',
  ];

  public function account()
  {
    return $this->belongsTo('App\Models\Account');
  }
  
  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

}
