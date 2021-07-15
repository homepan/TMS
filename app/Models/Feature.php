<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
  protected $guarded = ['id'];
  public $timestamps = false;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'features';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'description',
    'active',
  ];
  
  public function plans()
  {
    return $this->belongsToMany('App\Models\Plan', 'plan_feature', 'feature_id', 'plan_id');
  }
}
