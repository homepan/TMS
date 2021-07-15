<?php
namespace App\Lib\Utility;

use DB;
use Log;

class Code
{

  public static function var_dump($var)
  {
    ob_start();
    var_dump($var);
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }
  
  public static function getMinutes($str_time) 
  {
    $time_seconds = self::getSeconds($str_time);
    return $time_seconds/60;
  }
  
  public static function getSeconds($str_time) 
  {
    $str = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $str_time);
    sscanf($str, "%d:%d:%d", $hours, $minutes, $seconds);
    return $hours * 3600 + $minutes * 60 + $seconds;
  }
  
  public static function dateFormat($date_str)
  {
    return date('d M y', strtotime($date_str));
  }
  
  public static function timeFormat($time_str)
  {
    return date("H:i A", strtotime($time_str));
  }
	
	public static function dateTimeFormat($date_str)
  {
    return date('d M y, H:i A', strtotime($date_str));
  }
	
	public static function datepickerFormat($date_str)
  {
    return date('d/m/Y', strtotime($date_str));
  }
  
  public static function isTimeFormat($time)
  { //HH:MM
    return preg_match('/^\d{2}:\d{2}$/', $time);
  }
  
  public static function systemDateFormat($date_str)
  {
    return date('Y-m-d', strtotime($date_str));
  }
  
  public static function systemDateTimeFormat($date_str)
  {
    return date('Y-m-d, H:i:s', strtotime($date_str));
  }
  
  public static function numberFormat($number)
  {
    return number_format(round(self::removeCommas($number), 2), 2, '.', '');
  }
  
  public static function moneyFormat($number)
  {
    return number_format($number, 2, '.', ',');
  }
	
	public static function replaceNullValue($array)
	{
		foreach($array as $key=>$value)
		{
			if(is_null($value)) {
				$array[$key] = "";
			}
		}
		return $array;
	}
  
  public static function removeCommas($value)
  {
    return str_replace(',', '', $value);
  }
	
	public static function removeWhitespace($string) 
	{
		return preg_replace('/\s+/', '', $string);
	}
	
	public static function removeNoneNumeric($string)
	{
		return preg_replace("/[^0-9]/", "", $string );
	}
	
	public static function removeSpecialCharacters($string)
	{
		$str= str_replace('&', '-', $string);
    return preg_replace('/[^A-Za-z0-9\-]/', '', $str); 
	}

  public static function getUserIP()
  {
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
      $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
      $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
      $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
      $ip = $forward;
    } else {
      $ip = $remote;
    }

    return $ip;
  }

  public static function encrypt_decrypt($action, $string, $secret_key, $secret_iv)
  {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encrypt') {
      $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
      $output = base64_encode($output);
    } else if ($action == 'decrypt') {
      $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
  }

  public static function isNotSytemKeys($key)
  {
    if (!$key) {
      return false;
    }
    return !in_array($key, ['_token', '_method']);
  }

  public static function keyValueArray($array)
  {
    return array_combine($array, $array);
  }

  public static function numbersArray($start, $end)
  {
    return array_combine(range($start, $end), range($start, $end));
  }

  public static function arrayToObject($array)
  {
    $obj = new \stdClass;
    foreach ($array as $k => $v)
    {
      if (strlen($k)) {
        if (is_array($v)) {
          $obj->{$k} = self::arrayToObject($v); //RECURSION
        } else {
          $obj->{$k} = $v;
        }
      }
    }
    return $obj;
  }

  public static function objectToArray($object)
  {
    return json_decode(json_encode($object), true);
  }

  public static function arraySort($array, $on, $order = SORT_ASC)
  {

    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
      foreach ($array as $k => $v)
      {
        if (is_array($v)) {
          foreach ($v as $k2 => $v2)
          {
            if ($k2 == $on) {
              $sortable_array[$k] = $v2;
            }
          }
        } else {
          $sortable_array[$k] = $v;
        }
      }

      switch ($order)
      {
        case SORT_ASC:
          asort($sortable_array);
          break;
        case SORT_DESC:
          arsort($sortable_array);
          break;
      }

      foreach ($sortable_array as $k => $v)
      {
        $new_array[$k] = $array[$k];
      }
    }

    return $new_array;
  }

  public static function searchArrayByKey($array, $search_key)
  {
    $flatted_array = [];
    $it = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($array));
    foreach ($it as $key => $value)
    {
      if ($key == $search_key) {
        $flatted_array[] = $value;
      }
    }
    return $flatted_array;
  }
	
  public static function snakeCaseKeyToCamelCase($key)
  {
    // replace underscores with spaces, uppercase first letter of all words,
    // join them, lowercase the very first letter of the name
    return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));
  }
  
  public static function snakeToCamelCase($str)
  {
    return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
  }
  
  public static function camelToSnakeCase($str)
  {
    $matches = [];
    preg_match_all('/[A-Z]/', $str, $matches, PREG_OFFSET_CAPTURE);
    if(isset($matches[0])) {
      foreach($matches[0] as $index=>$match)
      {
        $str = substr_replace($str, '_', $match[1]+$index, 0);
      }
    }
    return strtolower($str);
  }

  public static function camelCaseArrayKeys($array)
  {
    $new_array = [];
    foreach ($array as $key => $value)
    {
      if (is_array($value)) {
        $value = self::camelCaseArrayKeys($value);
      }
      $new_array[self::snakeCaseKeyToCamelCase($key)] = $value;
    }
    return $new_array;
  }

  public static function firstArrayItem($array)
  {
    $tmp_array = (array) $array;
    reset($tmp_array);
    $first_key = key($array);
    return $array[$first_key];
  }

  public static function firstArrayKey($array)
  {
    $tmp_array = (array) $array;
    reset($tmp_array);
    $first_key = key($array);
    return $first_key;
  }

  public static function wordExists($word, $string)
  {
    if (strpos($string, $word) !== false) {
      return true;
    }
    return false;
  }

  static public function startsWith($haystack, $needle)
  {
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
  }

  static public function startsWithArray($haystack, $needles)
  {
    if ($needles) {
      foreach ($needles as $needle)
      {
        if (self::startsWith($haystack, $needle)) {
          return true;
        }
      }
    }

    return false;
  }

  static public function endsWith($haystack, $needle)
  {
    $length = strlen($needle);
    if ($length == 0) {
      return true;
    }

    return (substr($haystack, -$length) === $needle);
  }

  public static function removeArrayValue($needle, &$haystack)
  {
    if (($key = array_search($needle, $haystack)) !== false) {// remove
      unset($haystack[$key]);
    }
  }

  public static function removeLeadingZeroes($str)
  {
    return ltrim($str, '0');
  }

  public static function regex($pattern, $value)
  {
    if (preg_match($pattern, $value) === 1) {
      return true;
    }
    return false;
  }

  public static function getPreDiscountPrice($discounted_price, $discount_percentage = 0)
  {
    return self::numberFormat($discounted_price / (100 - $discount_percentage) * 100);
  }

  public static function getDiscountPrice($full_price, $discount_percentage = 0)
  {
    return self::numberFormat($full_price) * ((100 - floatval($discount_percentage)) / 100);
  }

  static public function shorterText($text, $chars_limit)
  {
    // Check if length is larger than the character limit
    if (strlen($text) > $chars_limit) {
      // If so, cut the string at the character limit
      $new_text = substr($text, 0, $chars_limit);

      // Trim off white space
      $new_text = trim(substr($new_text, 0, strrpos($new_text, " ")));
      // Add at end of text ...
      return $new_text;
    }
    // If not just return the text as is
    else {
      return $text;
    }
  }

  public static function generateToken()
  {
    return md5(uniqid(mt_rand(), true));
  }

  public static function getFriendlyUrl($str)
  {
    $str = strtolower(preg_replace('/[^.\w]/', '-', $str));
    return preg_replace('/\_+/', '_', $str);
  }

  public static function urlToTitle($friendly_url)
  {
    return ucwords(str_replace('-', ' ', $friendly_url));
  }

  static function classNameToUrl($class_name)
  {
    return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $class_name));
  }

  public static function reverseDate($date)//eg. DD/MM/YYYY
  {
    $date_array = explode('/', $date);
    return $date_array[2] . '-' . $date_array[1] . '-' . $date_array[0];
  }

  public static function inverseDate($date)//eg. YYYY-MM-DD
  {
    $date_array = explode('-', $date);
    return $date_array[2] . '/' . $date_array[1] . '/' . $date_array[0];
  }

  public static function reverseMonth($date)
  {
    $date_array = explode('/', $date);
    return $date_array[1] . '-' . $date_array[0];
  }

  public static function roundToQuarterHour($datetime)
  {
    // Set number of seconds to 0 (by rounding up to the nearest minute)
    $second = $datetime->format("s");
    $datetime->add(new \DateInterval("PT" . (60 - $second) . "S"));
    // Get minute
    $minute = $datetime->format("i");
    // Convert modulo 15
    $minute = $minute % 15;
    // Count minutes to next 10-multiple minuts
    $diff = 15 - $minute;
    // Add the difference to the original date time
    $datetime->add(new \DateInterval("PT" . $diff . "M"));
    return $datetime;
  }

  static function formatBytes($bytes)
  {
    $type = 0;
    while ($bytes > 1024 && $type < 4)
    {
      $type++;
      $bytes /= 1024;
    }

    $label = "Bytes";
    switch ($type)
    {
      case 1:
        $label = "KB";
        break;
      case 2:
        $label = "MB";
        break;
      case 3:
        $label = "GB";
        break;
      case 4:
        $label = "TB";
        break;
    }
    return round($bytes, 2) . ' ' . $label;
  }

  public static function getLastUrlPath($url_path)
  {
    $path_array = explode('/', $url_path);
    if ($path_array) {
      return end($path_array);
    }
    return NULL;
  }

}
