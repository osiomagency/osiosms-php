<?php

namespace OsioSms\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class BaseApi
{
    protected $client;

    public function __construct($apiToken)
    {
        $this->client = new Client([
            'base_uri' => 'https://app.osiosms.fr/api/v3/',
            'headers' => [
                'Authorization' => 'Bearer ' . $apiToken,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ]
        ]);
    }

    protected function sendRequest($method, $url, $data = [])
    {
        try {
            $response = $this->client->request($method, $url, ['json' => $data]);

            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                return json_decode($e->getResponse()->getBody(), true);
            }

            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }
}
