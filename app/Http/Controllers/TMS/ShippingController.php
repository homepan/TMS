<?php
namespace App\Http\Controllers\TMS;
use Illuminate\Http\Request;
use Log;
use GuzzleHttp\Client;
use App\Lib\TMS\AuLocation;
use App\Lib\TMS\Adapter;

class ShippingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show form to collect required information
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getQuote()
    {
        return view('shipping.quote');
    }

    /**
     * Get Shipping Quote
     *
     * @param String $fromLocation A comma-separated string containing  suburb, state, postcode consecutively
     * @param String $toLocation  A comma-separated string containing  suburb, state, postcode consecutively
     * @param Array $parcels  collection of Array with keys: weight, length, width, height, packageType
     * @return json
     */
    public function doGetQuote(Request $request)
    {
        try {
            // Log::info($request->all());
            $from_location_str = $request->fromLocation;
            $form_location_data = Adapter::getLocationData($from_location_str);
            $from_location = new AuLocation($form_location_data['suburb'], $form_location_data['state'], $form_location_data['postcode']);
            $to_location_str = $request->toLocation;
            $to_location_data = Adapter::getLocationData($to_location_str);
            $to_location = new AuLocation($to_location_data['suburb'], $to_location_data['state'], $to_location_data['postcode']);
            $parcels = $request->parcels;
            
            $client = new Client();
            $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

            return response()->json([
                'version' => config('app.version'),
                'env' => config('app.env'),
                'fromSuburb' => $from_location->getSuburb(),
                'fromState' => $from_location->getState(),
                'fromPostcode' => $from_location->getPostcode(),
                'toSuburb' => $to_location->getSuburb(),
                'toState' => $to_location->getState(),
                'toPostcode' => $to_location->getPostcode(),
                'parcels' => $parcels,
                'responseCode' => $response->getStatusCode(),
                'contentType' => $response->getHeaderLine('content-type'),

            ]);
        } catch (\Exception $ex) {
            return response()->json(['error' => ['code' => $ex->getCode(), 'message' => $ex->getMessage()]]);
        }
    }
}