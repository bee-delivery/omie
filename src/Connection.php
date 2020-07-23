<?php

namespace BeeDelivery\Omie\src;


use GuzzleHttp\Client;


class Connection {

    public $http;
    public $api_key;
    public $api_secret;
    public $base_url;

    public function __construct($apiKey = null, $apiSecret = null) {

        if($apiKey == null){

            $this->api_key = config('omie.app_key');

        }else{

            $this->api_key = $apiKey;

        }


        if($apiSecret == null){

            $this->api_secret = config('omie.app_secret');

        }else{

            $this->api_secret = $apiSecret;

        }

        $this->base_url     = config('omie.base_url');


        $this->http = new Client([
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        return $this->http;
    }

    public function get($url, $call)
    {

        try{
            $response = $this->http->get($this->base_url . $url, $call);
            return [
                'code'     => $response->getStatusCode(),
                'response' => json_decode($response->getBody()->getContents())
            ];
        }catch (\Exception $e){

            return [
                'code'     => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }

        $response = $this->http->get($this->base_url . $url);
    }

    public function post($url, $params, $call)
    {       
        $body = [

            'body'          => json_encode([
            'call'          => $call,
            'app_key'       => $this->api_key,
            'app_secret'    => $this->api_secret,
            'param'         => [$params]

        ])];
        
        try{

            $response = $this->http->post($this->base_url . $url, $body);

            return [
                'code'     => $response->getStatusCode(),
                'response' => json_decode($response->getBody()->getContents())
            ];

        }catch (\Exception $e){

            return [
                'code'     => $e->getCode(),
                'response' => $e->getMessage()
            ];
            
        }
    }

    public function delete($url)
    {
        $response = $this->http->delete($this->base_url . $url);
        return json_decode($response->getBody()->getContents(), true);
    }
    
}