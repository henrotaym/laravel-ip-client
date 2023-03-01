<?php

namespace Henrotaym\LaravelTrustupIoIpClient\Api\Endpoints\Location;

use Henrotaym\LaravelApiClient\Contracts\ClientContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location\LocationEndpointContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location\ShowLocationResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Clients\Location\LocationClientFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Requests\Location\ShowLocationRequestFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Responses\Location\ShowLocationResponseFactoryContract;

class LocationEndpoint implements LocationEndpointContract
{
    protected ClientContract $client;

    public function __construct(
        protected LocationClientFactoryContract $clientFactory,
        protected ShowLocationRequestFactoryContract $requestFactory,
        protected ShowLocationResponseFactoryContract $responseFactory,

    ){}

    /**
     * Getting details concerning given ip.
     *
     * @param string $ip
     * @return ShowLocationResponseContract
     */
    public function show(string $ip): ShowLocationResponseContract
    {
        $client = $this->clientFactory->create();
        $request = $this->requestFactory->create($ip);
        $response = $client->try($request, "Could not get IP details from API.");

        if ($response->failed()) report($response->error());

        return $this->responseFactory->create($ip, $response);
    }
}
