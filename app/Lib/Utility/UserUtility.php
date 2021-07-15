<?php

namespace App\Lib\Utility;

use Session;
use App\Models\User;

class UserUtility 
{
  protected static $imitate_user_session = 'imitated_user_id';
  
  public static function getData($user)
  {
    return [
      'id' => $user->id,
      'name' => $user->name,
      'email' => $user->email,
      'role' => $user->roles->first()->name,
      'ability' => self::getAbility($user),
    ];
  }
  
  public static function getByToken($token)
  {
    $user = User::whereId(base64_decode($token))->first();
    if (!$user) {
      throw new \Exception('User not Found');
    }
    return $user;
  }
  
  public static function getAbility($user)
  {
    // default ability
    $ability = [
      ['action' => 'view', 'subject' => 'dashboard'],
      ['action' => 'manage', 'subject' => 'profile']
    ];
    if (Session::has(self::$imitate_user_session)) {
      $ability[] = ['action' => 'view', 'subject' => 'dev'];
    }
    if ($user->hasRole('Super User')) {
      $ability[] = ['action' => 'manage', 'subject' => 'all'];
    } else {
      if ($user->hasRole('Admin')) {
        $ability[] = ['action' => 'view', 'subject' => 'admin'];
         $ability[] = ['action' => 'manage', 'subject' => 'api'];
      }
    }
    $permissions = $user->getAllPermissions();
    if ($permissions) {
      foreach ($permissions as $permission)
      {
        $array = explode('-', $permission->name);
        $action = end($array);
        array_pop($array);
        $subject = implode(' ', $array);
        $ability[] = ['action' => $action, 'subject' => $subject];
      }
    }
    return $ability;
  }
}