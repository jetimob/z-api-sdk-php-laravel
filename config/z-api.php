<?php

return [
    'http' => [
        // how many retries before we actually throw an exception?
        'retries' => 5,

        // on which status code we should consider retrying the request?
        'retry_on_status_code' => [],

        // before retrying a failed request, wait for the specified amount of time, in milliseconds
        'retry_delay' => 2000,

        // z-api's bearer token
        'bearer_token_value' => env('ZAPI_BEARER_TOKEN', ''),

        // z-api's instance id
        'default_instance_id' => env('ZAPI_INSTANCE_ID', ''),

        'security_token_value' => env('ZAPI_SECURITY_TOKEN', ''),

        // guzzle configuration, given to Guzzle instance as is
        'guzzle' => [
            'base_uri' => env('ZAPI_BASE_URI', 'https://api.z-api.io/'),

            // Number of seconds to wait while trying to connect to a server. 0 waits indefinitely.
            'connect_timeout' => 0.0,

            // Time needed to throw a timeout exception after a request is made.
            'timeout' => 0.0,

            // Set this to true if you want to debug the request/response.
            'debug' => true,

            'middlewares' => [
            ],
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | Implementação dos endpoints da API
    |--------------------------------------------------------------------------
    |
    | Escolheu-se dar a opção de sobrescrever a implementação de um endpoint para que, se necessário, possam ser
    | modificados sem a necessidade de alterar o pacote original.
    |
    | A única obrigatoriedade é que a classe estenda \Jetimob\ZApi\Api\AbstractApi.
    |
    | Chaves também podem ser adicionadas neste vetor e assim serem chamadas direto da facade.
    |
    */
    'api_impl' => [
        'instance' => \Jetimob\ZApi\Api\Instance\InstanceApi::class,
        'message' => \Jetimob\ZApi\Api\Message\MessageApi::class,
        'queue' => \Jetimob\ZApi\Api\Queue\QueueApi::class,
    ],
];
