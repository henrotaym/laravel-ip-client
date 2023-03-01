<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Casts;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromAttributesLocationFactoryContract;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
 
class LocationCast implements CastsAttributes
{

    /**
     * @param ?string $value
     */
    public function get($model, string $key, $value, array $attributes)
    {
        if (!$value) return null;

        /** @var FromAttributesLocationFactoryContract */
        $factory = app()->make(FromAttributesLocationFactoryContract::class);

        return $factory->create(json_decode($value, true));
    }
    
    /**
     * @param ?LocationContract $value
     */
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value) return null;

        return json_encode([
            "ip" => $value->getIp(),
            "latitude" => $value->getLatitude(),
            "longitude" => $value->getLongitude(),
            "timezone" => $value->getTimezone(),
            "city" => $value->getCity(),
            "country" => $value->getCountry(),
        ]);
    }
}