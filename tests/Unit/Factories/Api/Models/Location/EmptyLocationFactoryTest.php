<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Unit\Factories\Api\Models\Location;

use Mockery\MockInterface;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location\EmptyLocationFactory;

class EmptyLocationFactoryTest extends TestCase
{
    public function test_creating_empty_location()
    {
        $factory = $this->newEmptyLocationFactory();
        $location = $factory->create("ip");

        $this->assertInstanceOf(LocationContract::class, $location);
        $this->assertEquals("ip", $this->getPrivateProperty("ip", $location));
    }

    protected function newEmptyLocationFactory(): EmptyLocationFactory
    {
        return $this->app->make(EmptyLocationFactory::class);
    }

    /** @return MockInterface|EmptyLocationFactory */
    protected function mockEmptyLocationFactory(): MockInterface
    {
        return $this->mockThis(EmptyLocationFactory::class);
    }
}