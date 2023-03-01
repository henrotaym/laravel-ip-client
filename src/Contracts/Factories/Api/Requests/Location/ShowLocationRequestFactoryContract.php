<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Requests\Location;

use Henrotaym\LaravelApiClient\Contracts\RequestContract;

interface ShowLocationRequestFactoryContract
{
    public function create(string $ip): RequestContract;
}