<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Responses\Location;

use Mockery\MockInterface;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;
use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Responses\Location\ShowLocationResponseFactory;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location\ShowLocationResponseContract;

class ShowLocationResponseFactoryTest extends TestCase
{
    public function test_creating_response()
    {
        $tryResponse = $this->mockTryResponse();
        $factory = $this->newShowLocationResponseFactory();

        $response = $factory->create("ip", $tryResponse);

        $this->assertInstanceOf(ShowLocationResponseContract::class, $response);
        $this->assertEquals($tryResponse, $this->getPrivateProperty("response", $response));
        $this->assertEquals("ip", $this->getPrivateProperty("ip", $response));
    }

    protected function newShowLocationResponseFactory(): ShowLocationResponseFactory
    {
        return $this->app->make(ShowLocationResponseFactory::class);
    }

    /** @return MockInterface|ShowLocationResponseFactory */
    protected function mockShowLocationResponseFactory(): MockInterface
    {
        return $this->mockThis(ShowLocationResponseFactory::class);
    }
}