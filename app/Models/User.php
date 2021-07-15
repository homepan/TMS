<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

  use HasApiTokens,
      HasFactory,
      HasRoles,
      Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'account_id',
    'branch_id',
    'parent_id',
    'firstname',
    'lastname',
    'telephone',
    'email',
    'email_verified_sent',
    'password',
    'active',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function saveRoles($roles)
  {
    if (!empty($roles)) {
      $this->roles()->sync($roles);
    } else {
      $this->roles()->detach();
    }
  }

  public function parent()
  {
    return $this->belongsTo('App\Models\User', 'parent_id');
  }

}
