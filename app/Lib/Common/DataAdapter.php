<?php
namespace App\Lib\Common;

trait DataAdapter
{
    /**
     * Import variables into the current symbol table from an array
     *
     * @param Array $var_array  Associative array
     * @return json
     */
    public function getArrayVariables($var_array, $prefix='_')
    {
        return extract($var_array, EXTR_PREFIX_SAME, $prefix);
    }
    
}

