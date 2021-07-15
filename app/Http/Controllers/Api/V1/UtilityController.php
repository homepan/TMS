<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Log;
use DB;
use App\Http\Controllers\Controller;
use App\Lib\Utility\Code;
use App\Models\Country;

class UtilityController extends Controller
{
  public function getCountryList() {
    try {
      $country_list = Country::orderBy('name', 'asc')->select('name', 'code')->get();
      return response()->json([
                'env' => config('app.env'),
                'version' => config('app.version'),
                'countries' => $country_list,
                
      ]);
    } catch (\Exception $ex) {
      return response()->json(['error' => ['code' => $ex->getCode(), 'message' => $ex->getMessage()]]);
    }
  }
}

