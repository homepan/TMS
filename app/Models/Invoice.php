<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $guarded = ['id'];

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'invoices';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'account_id',
    'user_id',
    'invoice_type_id',
    'payment_id',
    'total_amount',
    'paid_amount',
    'invoice_date',
    'invoice_due_date',
    'ref_id',
    'status',
    'note',
    'admin_comments',
    'admin_fee',
    'extra',
    'reminder',
  ];

  public function account()
  {
    return $this->belongsTo('App\Models\Account');
  }
  
  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
  
  public function invoice_type()
  {
    return $this->belongsTo('App\Models\InvoiceType', 'invoice_type_id');
  }
  
  public function payments()
  {
    return $this->belongsToMany('App\Models\Payment', 'invoice_payment', 'invoice_id', 'payment_id');
  }
  
  public function addPayment($payment)
  {
    $this->payments()->saveMany([$payment]);
  }
  
}
