<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Services;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location\LocationEndpointContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;

interface LocationServiceContract
{
    /**
     * Getting current ip.
     * 
     * @return string
     */
    public function getCurrentIp(): string;

    /**
     * Getting current IP location.
     * 
     * @return LocationContract
     */
    public function getCurrentIpLocation(): LocationContract;

    /**
     * Getting location endpoint.
     * 
     * @param string $ip
     * @return LocationEndpointContract
     */
    public function getEndpoint(): LocationEndpointContract;
}