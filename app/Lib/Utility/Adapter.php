<?php
namespace App\Lib\Utility;

use Log;

class Adapter
{
	public static function convertHttpRequest($data)
	{
		return [];
	}
	
	public static function convertApiData($order, $nullValues=[])
	{
		$array = Code::objectToArray($order);
    if($nullValues) {
      foreach($array as $index=>$records)
      {
        foreach($records as $key=>$value)
        {
          if(in_array($key, $nullValues)) {
            if(is_null($value)) {
              $array[$index][$key] = "";
            }
          }
        }
      }
    }
		return Code::camelCaseArrayKeys($array);
	}
}