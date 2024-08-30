<?php

namespace App\Actions;

use GuzzleHttp\Client;

final class AdviceAction
{
    private Client $client;

    public function get(): string
    {
        $this->client = $this->getClient();

        return $this->getAdvice();
    }

    private function getClient(): Client
    {
        return new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.adviceslip.com/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    }

    private function getAdvice(): string
    {
        return json_decode(
            $this->client->request('GET', 'advice')->getBody(),
            true
        )['slip']['advice'];
    }
}
