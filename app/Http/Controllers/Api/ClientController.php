<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Log;
use DB;
use App\Http\Controllers\Controller;
use App\Lib\Utility\Code;
use App\Lib\Utility\UserUtility;

class ClientController extends Controller
{

  public function get(Request $request)
  {
    try {
      $user = UserUtility::getByToken($request->token);
      $result = DB::select("SELECT * FROM `oauth_clients` WHERE `user_id` = :user_id", ['user_id'=>$user->id]);
      $client_id = $result ? $result[0]->id : NULL;
      $client_secret = $result ? $result[0]->secret : NULL;
      $revoked = $result ? $result[0]->revoked : NULL;
      return response()->json([
                'env' => config('app.env'),
                'version' => config('app.version'),
                'clientId' => $client_id,
                'clientSecret' => $client_secret,
                'revoked' => $revoked ? true : false,
                
      ]);
    } catch (\Exception $ex) {
      return response()->json(['error' => ['code' => $ex->getCode(), 'message' => $ex->getMessage()]]);
    }
  }

}
