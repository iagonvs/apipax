<?php

namespace App\Services;


class EstadosService
{

   public function apilocalidades(){

    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', "https://servicodados.ibge.gov.br/api/v1/localidades/estados", [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ],
        'http_errors' => false
    ]);
    return json_decode($response->getBody()->getContents(), true);

   }
}
