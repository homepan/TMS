<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
  protected $guarded = ['id'];
  
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'campaigns';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title', 
    'description', 
    'threshold', 
    'start_date',
    'end_date',
    'active',
  ];
  
  public function rewards()
  {
    return $this->belongsToMany('App\Models\Reward', 'campaign_reward');
  }
  
}
