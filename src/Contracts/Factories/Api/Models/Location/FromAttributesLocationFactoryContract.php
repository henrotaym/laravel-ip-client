<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;

interface FromAttributesLocationFactoryContract
{
    public function create(array $attributes): LocationContract;
}