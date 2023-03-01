<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Services;

use Illuminate\Http\Request;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location\LocationEndpointContract;

class LocationService implements LocationServiceContract
{
    public function __construct(
        protected Request $request,
        protected LocationEndpointContract $endpoint
    ){}

    /**
     * Getting current ip.
     * 
     * @return string
     */
    public function getCurrentIp(): string
    {
        return $this->request->header("CF-Connecting-IP") ??
            $this->request->ip();
    }

    /**
     * Getting current IP location.
     * 
     * @return LocationContract
     */
    public function getCurrentIpLocation(): LocationContract
    {
        return $this->endpoint->show($this->getCurrentIp())->getLocation();
    }

    /**
     * Getting location endpoint.
     * 
     * @param string $ip
     * @return LocationEndpointContract
     */
    public function getEndpoint(): LocationEndpointContract
    {
        return $this->endpoint;
    }
}