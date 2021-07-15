<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Log;
use DB;
use App\Http\Controllers\Controller;
use App\Lib\Utility\Code;
use App\Lib\Utility\Adapter;
use App\Lib\Utility\UserUtility;

class UserController extends Controller
{

  public function getProfile(Request $request)
  {
    try {
      Log::info($request->all());
      $user = UserUtility::getByToken($request->token);
      $options = [
        'general' => [
          'username' => $user->name,
          'fullName' => $user->name,
          'email' => $user->email,
          'company' => '',
          'emailVerified' => $user->email_verified_at ? true : false,
        ]
      ];
      return response()->json([
                'env' => config('app.env'),
                'version' => config('app.version'),
                'options' => $options,
                
      ]);
    } catch (\Exception $ex) {
      return response()->json(['error' => ['code' => $ex->getCode(), 'message' => $ex->getMessage()]]);
    }
  }

}
