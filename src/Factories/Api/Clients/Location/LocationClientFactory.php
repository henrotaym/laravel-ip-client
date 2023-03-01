<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Clients\Location;

use Henrotaym\LaravelApiClient\Contracts\ClientContract;
use Henrotaym\LaravelTrustupIoIpClient\Api\Credentials\Location\LocationCredential;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Clients\Location\LocationClientFactoryContract;

class LocationClientFactory implements LocationClientFactoryContract
{
    public function __construct(
        protected LocationCredential $credential
    ) {}

    public function create(): ClientContract
    {
        return $this->getNewClient()->setCredential($this->credential);
    }

    protected function getNewClient(): ClientContract
    {
        return app()->make(ClientContract::class);
    }
}