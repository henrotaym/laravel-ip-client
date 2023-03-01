<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Unit\Factories\Api\Models\Location;

use Mockery\MockInterface;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location\FromApiLocationFactory;

class FromApiLocationFactoryTest extends TestCase
{
    public function test_creating_location_from_success_response()
    {
        $tryResponse = $this->mockTryResponse();
        $response = $this->mockResponse();
        $apiData = [
            "status" => "success",
            "lat" => "lat",
            "lon" => "lon",
            "timezone" => "timezone",
            "city" => "city",
            "country" => "country",
        ];
        $emptyFactory = $this->mockEmptyLocationFactory();
        $attributesFactory = $this->mockFromAttributesLocationFactory();
        $factory = $this->newFromApiLocationFactory();
        $location = $this->mockLocation();

        $tryResponse->shouldReceive("response")->once()->with()->andReturn($response);
        $tryResponse->shouldReceive("failed")->once()->with()->andReturn(false);
        $response->shouldReceive("get")->once()->with(true)->andReturn($apiData);

        $emptyFactory->shouldNotReceive("create");
        $attributesFactory->shouldReceive("create")->once()->with([
            "ip" => "ip",
            "latitude" => "lat",
            "longitude" => "lon",
            "timezone" => "timezone",
            "city" => "city",
            "country" => "country",
        ])->andReturn($location);

        $this->assertInstanceOf(LocationContract::class, $factory->create("ip", $tryResponse));
    }

    public function test_creating_location_from_not_found_response()
    {
        $tryResponse = $this->mockTryResponse();
        $response = $this->mockResponse();
        $apiData = [
            "status" => "failed"
        ];
        $emptyFactory = $this->mockEmptyLocationFactory();
        $attributesFactory = $this->mockFromAttributesLocationFactory();
        $factory = $this->newFromApiLocationFactory();
        $location = $this->mockLocation();

        $tryResponse->shouldReceive("response")->once()->with()->andReturn($response);
        $tryResponse->shouldReceive("failed")->once()->with()->andReturn(false);
        $response->shouldReceive("get")->once()->with(true)->andReturn($apiData);

        $emptyFactory->shouldReceive("create")->once()->with("ip")->andReturn($location);
        $attributesFactory->shouldNotReceive("create");

        $this->assertInstanceOf(LocationContract::class, $factory->create("ip", $tryResponse));
    }

    public function test_creating_location_from_failed_response()
    {
        $tryResponse = $this->mockTryResponse();
        $response = $this->mockResponse();
        $apiData = null;
        $emptyFactory = $this->mockEmptyLocationFactory();
        $attributesFactory = $this->mockFromAttributesLocationFactory();
        $factory = $this->newFromApiLocationFactory();
        $location = $this->mockLocation();

        $tryResponse->shouldReceive("response")->once()->with()->andReturn($response);
        $tryResponse->shouldReceive("failed")->once()->with()->andReturn(true);
        $response->shouldReceive("get")->once()->with(true)->andReturn($apiData);

        $emptyFactory->shouldReceive("create")->once()->with("ip")->andReturn($location);
        $attributesFactory->shouldNotReceive("create");

        $this->assertInstanceOf(LocationContract::class, $factory->create("ip", $tryResponse));
    }

    protected function newFromApiLocationFactory(): FromApiLocationFactory
    {
        return $this->app->make(FromApiLocationFactory::class);
    }

    /** @return MockInterface|FromApiLocationFactory */
    protected function mockFromApiLocationFactory(): MockInterface
    {
        return $this->mockThis(FromApiLocationFactory::class);
    }
}