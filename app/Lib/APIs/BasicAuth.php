<?php

namespace App\Lib\APIs\Authentication;

use App\Lib\Interface\RestApi;
use GuzzleHttp\Client;

abstract class BasicAuth implements RestApi
{
    protected $username;
    protected $password;
    protected $endpoint_url;

    protected function apiCall($endpoint, $method, $data = [], $timeout = '30')
    {
        $http_client = $this->getHttpClient();
        $response = NULL;
        switch (strtoupper($method))
        {
            case 'GET':
                $response = $http_client->request('GET', $endpoint,['query' => $data,  'timeout' => $timeout]);
                break;
            case 'POST':
            case 'PUT':
                $response = $http_client->request(strtoupper($method), $endpoint, ['form_params' => $data, 'timeout' => $timeout]);
                break;
            case 'DELETE':
                $response = $http_client->request('DELETE', $endpoint,['query' => $data,  'timeout' => $timeout]);
                break;
        }
        if (!$response) {
            throw new \Exception('Could not communicate with API');
        }
        $code = $response->getStatusCode(); // 200
        $reason = $response->getReasonPhrase(); // OK
        if ($code == 200) {
            $body = $response->getBody()->getContents();
            if (is_null($body)) {
                throw new \Exception('Internal Server Error', 500);
            }
            return json_decode($body);
        }
        return $code;
        
    }


/**
   * Get Http Client
   * @param string $method
   * @return GuzzleHttp\Client
   * @throws \Exception
   */
    protected function getHttpClient()
    {
        $jar = new \GuzzleHttp\Cookie\CookieJar;
        $client = new Client([
            'base_uri' => $this->endpoint_url,
            'timeout' => 2.0,
            "cookies" => $jar,
            'headers'  => ['content-type' => 'application/json', 'Accept' => 'application/json'],
            'auth' => [$this->username, $this->password],
        ]);
    }
}