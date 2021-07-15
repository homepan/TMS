<?php
namespace App\Lib\TMS;

class AuLocation extends Location
{
    protected $state;

    public function __construct($suburb, $state, $postcode) 
    {
        $this->suburb = $suburb;
        $this->state = $state;
        $this->postcode = $postcode;
        $this->location = [
            'suburb' => $this->suburb,
            'state' => $this->state,
            'postcode' => $this->postcode,
        ];
    }

    public function getJsonData()
    {
        return json_encode([
            'suburb' => $this->suburb,
            'state' => $this->state,
            'postcode' => $this->postcode,
        ]);
    }

}