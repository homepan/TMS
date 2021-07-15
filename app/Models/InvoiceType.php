<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceType extends Model
{
  protected $guarded = ['id'];

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'invoice_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'title',
    'description',
    'active',
  ];
}
