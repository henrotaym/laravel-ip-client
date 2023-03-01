<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests;

use Mockery\MockInterface;
use Henrotaym\LaravelTestSuite\TestSuite;
use Henrotaym\LaravelApiClient\Contracts\ResponseContract;
use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location\LocationEndpointContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\EmptyLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Clients\Location\LocationClientFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromApiLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Requests\Location\ShowLocationRequestFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromAttributesLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Responses\Location\ShowLocationResponseFactoryContract;

trait AppTestSuite
{
    use TestSuite;

    protected function newEmptyLocationFactory(): EmptyLocationFactoryContract
    {
        return $this->app->make(EmptyLocationFactoryContract::class);
    }

    /** @return MockInterface|EmptyLocationFactoryContract */
    protected function mockEmptyLocationFactory(): MockInterface
    {
        return $this->mockThis(EmptyLocationFactoryContract::class);
    }

    protected function newFromAttributesLocationFactory(): FromAttributesLocationFactoryContract
    {
        return $this->app->make(FromAttributesLocationFactoryContract::class);
    }

    /** @return MockInterface|FromAttributesLocationFactoryContract */
    protected function mockFromAttributesLocationFactory(): MockInterface
    {
        return $this->mockThis(FromAttributesLocationFactoryContract::class);
    }

    protected function newFromApiLocationFactory(): FromApiLocationFactoryContract
    {
        return $this->app->make(FromApiLocationFactoryContract::class);
    }

    /** @return MockInterface|FromApiLocationFactoryContract */
    protected function mockFromApiLocationFactory(): MockInterface
    {
        return $this->mockThis(FromApiLocationFactoryContract::class);
    }

    protected function newLocationClientFactory(): LocationClientFactoryContract
    {
        return $this->app->make(LocationClientFactoryContract::class);
    }

    /** @return MockInterface|LocationClientFactoryContract */
    protected function mockLocationClientFactory(): MockInterface
    {
        return $this->mockThis(LocationClientFactoryContract::class);
    }

    protected function newShowLocationRequestFactory(): ShowLocationRequestFactoryContract
    {
        return $this->app->make(ShowLocationRequestFactoryContract::class);
    }

    /** @return MockInterface|ShowLocationRequestFactoryContract */
    protected function mockShowLocationRequestFactory(): MockInterface
    {
        return $this->mockThis(ShowLocationRequestFactoryContract::class);
    }

    protected function newShowLocationResponseFactory(): ShowLocationResponseFactoryContract
    {
        return $this->app->make(ShowLocationResponseFactoryContract::class);
    }

    /** @return MockInterface|ShowLocationResponseFactoryContract */
    protected function mockShowLocationResponseFactory(): MockInterface
    {
        return $this->mockThis(ShowLocationResponseFactoryContract::class);
    }

    /** @return MockInterface|TryResponseContract */
    protected function mockTryResponse(): MockInterface
    {
        return $this->mockThis(TryResponseContract::class);
    }

    /** @return MockInterface|ResponseContract */
    protected function mockResponse(): MockInterface
    {
        return $this->mockThis(ResponseContract::class);
    }

    protected function newLocation(): LocationContract
    {
        return $this->app->make(LocationContract::class);
    }

    /** @return MockInterface|LocationContract */
    protected function mockLocation(): MockInterface
    {
        return $this->mockThis(LocationContract::class);
    }

    protected function newLocationEndpoint(): LocationEndpointContract
    {
        return $this->app->make(LocationEndpointContract::class);
    }

    /** @return MockInterface|LocationEndpointContract */
    protected function mockLocationEndpoint(): MockInterface
    {
        return $this->mockThis(LocationEndpointContract::class);
    }

    protected function newLocationService(): LocationServiceContract
    {
        return $this->app->make(LocationServiceContract::class);
    }

    /** @return MockInterface|LocationServiceContract */
    protected function mockLocationService(): MockInterface
    {
        return $this->mockThis(LocationServiceContract::class);
    }
}