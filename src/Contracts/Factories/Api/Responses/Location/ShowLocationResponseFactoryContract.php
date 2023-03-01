<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Responses\Location;

use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location\ShowLocationResponseContract;

interface ShowLocationResponseFactoryContract
{
    public function create(
        string $ip,
        TryResponseContract $response
    ): ShowLocationResponseContract;
}