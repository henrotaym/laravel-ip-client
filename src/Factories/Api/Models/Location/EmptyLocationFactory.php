<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\EmptyLocationFactoryContract;

class EmptyLocationFactory implements EmptyLocationFactoryContract
{
    public function create(string $ip): LocationContract
    {
        return app()->make(LocationContract::class, ["ip" => $ip]);
    }
}