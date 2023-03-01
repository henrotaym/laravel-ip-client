<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Requests\Location;

use Henrotaym\LaravelApiClient\Contracts\RequestContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Requests\Location\ShowLocationRequestFactoryContract;

class ShowLocationRequestFactory implements ShowLocationRequestFactoryContract
{
    public function create(string $ip): RequestContract
    {
        return $this->getNewRequest()
            ->setVerb("GET")
            ->setUrl(urlencode($ip));
    }

    protected function getNewRequest(): RequestContract
    {
        return app()->make(RequestContract::class);
    }
}