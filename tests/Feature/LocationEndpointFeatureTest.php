<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Feature;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Facades\LaravelTrustupIoIpClientFacade;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;

class LocationEndpointFeatureTest extends TestCase
{
    public function test_getting_empty_location_with_wrong_ip()
    {
        $ip = "fakeIp";
        $endpoint = $this->newLocationEndpoint();

        $response = $endpoint->show($ip);

        $this->assertInstanceOf(LocationContract::class, $response->getLocation());
        $this->assertEquals($ip, $response->getLocation()->getIp());
        $this->assertTrue($response->getLocation()->isEmpty());
        $this->assertNull($response->getLocation()->getCity());
        $this->assertNull($response->getLocation()->getCountry());
        $this->assertNull($response->getLocation()->getLatitude());
        $this->assertNull($response->getLocation()->getLongitude());
        $this->assertNull($response->getLocation()->getTimezone());
    }

    public function test_getting_empty_location_when_api_is_unacessible()
    {
        // Setting API url to unvalid url
        LaravelTrustupIoIpClientFacade::setConfig("api.location.url", "https://laravel.testastos");
        $ip = "131.0.72.0";
        $endpoint = $this->newLocationEndpoint();

        $response = $endpoint->show($ip);

        $this->assertInstanceOf(LocationContract::class, $response->getLocation());
        $this->assertEquals($ip, $response->getLocation()->getIp());
        $this->assertTrue($response->getLocation()->isEmpty());
        $this->assertNull($response->getLocation()->getCity());
        $this->assertNull($response->getLocation()->getCountry());
        $this->assertNull($response->getLocation()->getLatitude());
        $this->assertNull($response->getLocation()->getLongitude());
        $this->assertNull($response->getLocation()->getTimezone());
    }

    public function test_getting_location_with_correct_ip()
    {
        $ip = "173.245.48.0";
        $expected = [
            "latitude" => "34.0522",
            "longitude" => "-118.2436",
            "timezone" => "America/Los_Angeles",
            "city" => "Los Angeles",
            "country" => "United States"
        ];
        $endpoint = $this->newLocationEndpoint();
        
        $response = $endpoint->show($ip);

        $this->assertInstanceOf(LocationContract::class, $response->getLocation());
        $this->assertEquals($ip, $response->getLocation()->getIp());
        $this->assertFalse($response->getLocation()->isEmpty());
        $this->assertEquals($expected["city"], $response->getLocation()->getCity());
        $this->assertEquals($expected["country"], $response->getLocation()->getCountry());
        $this->assertEquals($expected["latitude"], $response->getLocation()->getLatitude());
        $this->assertEquals($expected["longitude"], $response->getLocation()->getLongitude());
        $this->assertEquals($expected["timezone"], $response->getLocation()->getTimezone());
    }
}