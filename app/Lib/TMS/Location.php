<?php
namespace App\Lib\TMS;

use App\Lib\Base\RestTransport;

abstract class Location implements RestTransport
{
    protected $suburb;
    protected $postcode;
    protected $location = [];

    public function getLocationStr()
    {
        return implode(', ', $this->location);
    }

    public function getSuburb()
    {
        return $this->suburb;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }
}