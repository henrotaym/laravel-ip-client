<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;

interface EmptyLocationFactoryContract
{
    public function create(string $ip): LocationContract;
}