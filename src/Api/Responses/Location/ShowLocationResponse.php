<?php

namespace Henrotaym\LaravelTrustupIoIpClient\Api\Responses\Location;

use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location\ShowLocationResponseContract;

class ShowLocationResponse implements ShowLocationResponseContract
{
    public function __construct(
        protected TryResponseContract $response,
        protected LocationContract $location
    ){}

    /**
     * Getting underlying response.
     *
     * @return TryResponseContract
     */
    public function getResponse(): TryResponseContract
    {
        return $this->response;
    }

    /**
     * Getting Location model.
     *
     * @return LocationContract
     */
    public function getLocation(): LocationContract
    {
        return $this->location;
    }
}
