<?php
namespace App\Lib\TMS;

use App\Lib\Common\DataAdapter;

class Adapter
{
    use DataAdapter;

    /**
     * Convert comma separated string to associative array with keys: 'suburb', 'state', 'postcode'
     *
     * @param String $location_str A comma-separated string containing  suburb, state, postcode consecutively
     * @return Array
     */
    public static function getLocationData($location_str)
    {
        $location_array = explode(',', $location_str);
        return count($location_array) > 2  ?  [
                'suburb' => trim($location_array[0]),
                'state' => trim($location_array[1]),
                'postcode' => trim($location_array[2]),
            ]: [
                'suburb' => trim($location_array[0]),
                'state' => NULL,
                'postcode' => trim($location_array[2]),
            ];    
    }
}