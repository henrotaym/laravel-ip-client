<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location;

use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;

interface FromApiLocationFactoryContract
{
    public function create(string $ip, TryResponseContract $response): LocationContract;
}