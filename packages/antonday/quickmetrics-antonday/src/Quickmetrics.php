<?php
namespace Antonday\Quickmetrics;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Quickmetrics {

    public static function event(string $name, float $value, ?string $dimension = null)
    {
        
        $client = new Client([
            'base_uri' => 'https://qckm.io'
        ]);
        
        $json = [
            'name' => $name,
            'value' => $value
        ];

        if($dimension) {
            $json['dimension'] = $dimension;
        }

        try {

            $res = $client->request('POST', '/json', [
                    'json' => $json,
                    'headers' => [
                        'x-qm-key' => config('quickmetrics.key')
                    ]
                ]);

            return response()->json([
                'code' => $res->getStatusCode(),
                'message' => $res->getReasonPhrase()
            ]);

        } catch (ClientException $ex) {

            return response()->json([
                'error' => $ex->getMessage(),
            ], 500);
        }

    }
} 