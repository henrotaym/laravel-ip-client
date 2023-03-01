<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;

interface TrustupIoLocationRelatedModelContract
{
    /**
     * Getting column where location is saved.
     */
    public function getTrustupIoLocationColumn(): string;

    /**
     * Setting location based on given ip.
     * 
     * @return static
     */
    public function setTrustupIoLocationFromCurrentIp(): TrustupIoLocationRelatedModelContract;

    /**
     * Setting location based on given ip.
     * 
     * @param string $ip
     * @return static
     */
    public function setTrustupIoLocationByIp(string $ip): TrustupIoLocationRelatedModelContract;

    /**
     * Setting location based on given ip.
     * 
     * @param ?LocationContract $location
     * @return static
     */
    public function setTrustupIoLocation(?LocationContract $location): TrustupIoLocationRelatedModelContract;
}