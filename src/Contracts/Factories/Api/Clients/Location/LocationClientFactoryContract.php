<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Clients\Location;

use Henrotaym\LaravelApiClient\Contracts\ClientContract;

interface LocationClientFactoryContract
{
    public function create(): ClientContract;
}