<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Unit\Factories\Api\Clients\Location;

use Henrotaym\LaravelApiClient\Contracts\ClientContract;
use Henrotaym\LaravelTrustupIoIpClient\Api\Credentials\Location\LocationCredential;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Clients\Location\LocationClientFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Clients\Location\LocationClientFactory;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;

class LocationClientFactoryTest extends TestCase
{
    public function test_creating_client_with_correct_credential()
    {
        /** @var LocationClientFactory */
        $factory = $this->app->make(LocationClientFactory::class);
        $client = $factory->create();

        $this->assertInstanceOf(ClientContract::class, $client);
        $this->assertInstanceOf(LocationCredential::class, $client->credential());
    }
}