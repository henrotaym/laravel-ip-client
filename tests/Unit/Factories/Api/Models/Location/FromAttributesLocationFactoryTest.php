<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location;

use Mockery\MockInterface;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location\FromAttributesLocationFactory;

class FromAttributesLocationFactoryTest extends TestCase
{
    public function test_creating_location_from_not_null_attributes()
    {
        $factory = $this->newFromAttributesLocationFactory();
        $attributes = [
            "latitude" => "latitude",
            "longitude" => "longitude",
            "timezone" => "timezone",
            "city" => "city",
            "country" => "country",
            "ip" => "ip"
        ];

        $location = $factory->create($attributes);

        $this->assertInstanceOf(LocationContract::class, $location);
        $this->assertEquals("ip", $this->getPrivateProperty("ip", $location));
        $this->assertEquals("latitude", $this->getPrivateProperty("latitude", $location));
        $this->assertEquals("longitude", $this->getPrivateProperty("longitude", $location));
        $this->assertEquals("timezone", $this->getPrivateProperty("timezone", $location));
        $this->assertEquals("city", $this->getPrivateProperty("city", $location));
        $this->assertEquals("country", $this->getPrivateProperty("country", $location));
    }

    public function test_creating_location_from_nullable_attributes()
    {
        $factory = $this->newFromAttributesLocationFactory();
        $attributes = [
            "latitude" => null,
            "longitude" => null,
            "timezone" => null,
            "city" => null,
            "country" => null,
            "ip" => "ip"
        ];

        $location = $factory->create($attributes);

        $this->assertInstanceOf(LocationContract::class, $location);
        $this->assertEquals("ip", $this->getPrivateProperty("ip", $location));
        $this->assertNull($this->getPrivateProperty("latitude", $location));
        $this->assertNull($this->getPrivateProperty("longitude", $location));
        $this->assertNull($this->getPrivateProperty("timezone", $location));
        $this->assertNull($this->getPrivateProperty("city", $location));
        $this->assertNull($this->getPrivateProperty("country", $location));
    }

    protected function newFromAttributesLocationFactory(): FromAttributesLocationFactory
    {
        return $this->app->make(FromAttributesLocationFactory::class);
    }

    /** @return MockInterface|FromAttributesLocationFactory */
    protected function mockFromAttributesLocationFactory(): MockInterface
    {
        return $this->mockThis(FromAttributesLocationFactory::class);
    }
}