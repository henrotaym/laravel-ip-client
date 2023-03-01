<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Requests\Location;

use Henrotaym\LaravelApiClient\Contracts\RequestContract;
use Mockery\MockInterface;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Requests\Location\ShowLocationRequestFactory;

class ShowLocationRequestFactoryTest extends TestCase
{
    public function test_creating_request_from_ip()
    {
        $factory = $this->newShowLocationRequestFactory();

        $request = $factory->create("ip");
        $this->assertInstanceOf(RequestContract::class, $request);
        $this->assertEquals("GET", $request->verb());
        $this->assertEquals("ip", $request->url());
    }
    
    protected function newShowLocationRequestFactory(): ShowLocationRequestFactory
    {
        return $this->app->make(ShowLocationRequestFactory::class);
    }

    /** @return MockInterface|ShowLocationRequestFactory */
    protected function mockShowLocationRequestFactory(): MockInterface
    {
        return $this->mockThis(ShowLocationRequestFactory::class);
    }
}