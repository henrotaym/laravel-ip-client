<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromAttributesLocationFactoryContract;

class FromAttributesLocationFactory implements FromAttributesLocationFactoryContract
{
    public function create(array $attributes): LocationContract
    {
        return app()->make(LocationContract::class, [
            "ip" => $attributes["ip"],
            "latitude" => $attributes["latitude"],
            "longitude" => $attributes["longitude"],
            "timezone" => $attributes["timezone"],
            "city" => $attributes["city"],
            "country" => $attributes["country"]
        ]);
    }
}