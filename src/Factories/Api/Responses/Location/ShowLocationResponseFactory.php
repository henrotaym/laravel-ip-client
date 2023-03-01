<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Responses\Location;

use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location\ShowLocationResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromApiLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Responses\Location\ShowLocationResponseFactoryContract;

class ShowLocationResponseFactory implements ShowLocationResponseFactoryContract
{
    public function __construct(
        protected FromApiLocationFactoryContract $locationFactory
    ) {}

    public function create(
        string $ip,
        TryResponseContract $response
    ): ShowLocationResponseContract
    {
        return app()->make(ShowLocationResponseContract::class, [
            "response" => $response,
            "location" => $this->locationFactory->create($ip, $response)
        ]);
    }
}