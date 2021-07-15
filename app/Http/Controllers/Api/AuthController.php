<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\ClientRepository;
use Carbon\Carbon;
use Validator;
use Session;
use Log;
use DB;
use App\Http\Controllers\Controller;
use App\Lib\Utility\Code;
use App\Lib\Utility\UserUtility;
//use App\Models\Account;
use App\Models\User;

class AuthController extends Controller
{

  /**
   * Create user
   *
   * @param  [string] firstName
   * @param  [string] lastName
   * @param  [string] email
   * @param  [string] password
   * @param  [string] password_confirmation
   * @return [string] message
   */
  public function register(Request $request)
  {
    try {
      $request->validate([
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'email' => 'required|string|email',
        'telephone' => 'required|string',
        'password' => 'required|string|',
      ]);
      $email = $request->get('email');
      $existing_user = User::where('email', $email)->first();
      if ($existing_user) {
        throw new \Exception("Email address already in use");
      }
      $user = new User([
        'firstname' => $request->firstName,
        'lastname' => $request->lastName,
        'email' => $request->email,
        'telephone' => $request->telephone,
        'password' => bcrypt($request->password)
      ]);
      if (!$user->save()) {
        throw new \Exception('Cound not create user. Please contact support.');
      }
      $user->saveRoles([2]); //Admin
      $clientRepository = app(ClientRepository::class);
      $callback = config('app.url') . '/oauth-callback';
      $client = $clientRepository->create($user->id, $user->name, $callback, null, false, true);
      if (!$client) {
        throw new \Exception('Cound not create passport client.');
      }
      return response()->json([
        'clientId' => $client->id,
        'clientSecret' => $client->secret,
        'userData' => UserUtility::getData($user),
      ]);
    } catch (\Exception $ex) {
      Log::error($ex->getMessage());
      return response()->json(['error' => ['code' => $ex->getCode(), 'message' => $ex->getMessage()]]);
    }
  }

  /**
   * Login user and create token
   *
   * @param  [string] email
   * @param  [string] password
   * @param  [boolean] remember_me
   * @return [string] access_token
   * @return [string] token_type
   * @return [string] expires_at
   */
  public function login(Request $request)
  {
    try {
      $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
        'remember_me' => 'boolean'
      ]);
      $credentials = request(['email', 'password']);
      if (!Auth::attempt($credentials)) {
        throw new \Exception('Unauthorized', 401);
      }
      $user = $request->user();
      if(!$user->active) {
        throw new \Exception('User suspended', 401);
      }
      if(!$user->account->active) {
        throw new \Exception('Account suspended', 401);
      }
      $client_id = NULL;
      $client_secret = NULL;
      $result = DB::select("SELECT `id`, `secret` FROM `oauth_clients` WHERE `user_id` = :user_id", ['user_id' => $user->id]);
      if ($result) {
        $client_id = $result[0]->id;
        $client_secret = $result[0]->secret;
      } else {
        $clientRepository = app(ClientRepository::class);
        $callback = config('app.url') . '/oauth-callback';
        $client = $clientRepository->create($user->id, $user->firstname . ' ' . $user->lastname, $callback, null, false, true);
        if ($client) {
          $client_id = $client->id;
          $client_secret = $client->secret;
        }
      }
      return response()->json([
                'userData' => UserUtility::getData($user),
                'clientId' => $client_id,
                'clientSecret' => $client_secret,
      ]);
    } catch (\Exception $ex) {
      Log::error($ex->getMessage());
      return response()->json(['error' => ['code' => $ex->getCode(), 'message' => $ex->getMessage()]]);
    }
  }

  /**
   * Log the user out (Invalidate the token).
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout(Request $request)
  {
    $token = $request->token;
    $user = User::whereId(base64_decode($token))->first();
    if (!$user) {
      throw new \Exception('User not found');
    }
    DB::table('oauth_access_tokens')->where('user_id', $user->id)->update(['revoked' => 1]);
    Session::forget('imitated_user_id');
    return response()->json([
              'message' => 'Successfully logged out'
    ]);
  }

  /**
   * Get the authenticated User
   *
   * @return [json] user object
   */
  public function user(Request $request)
  {
    return response()->json($request->user());
  }

}
