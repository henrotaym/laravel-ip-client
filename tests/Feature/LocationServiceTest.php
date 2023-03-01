<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Feature;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location\LocationEndpointContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;
use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;

class LocationServiceTest extends TestCase
{
    public function test_instanciating_service()
    {
        $this->assertInstanceOf(
            LocationServiceContract::class,
            $this->app->make(LocationServiceContract::class)
        );
    }
    
    public function test_getting_current_client_ip_from_cloudflare()
    {
        request()->headers->set("CF-Connecting-IP", "tests");

        $this->assertEquals("tests", $this->newLocationService()->getCurrentIp());
    }

    public function test_getting_current_client_ip_from_base_request_if_no_cloudflare_header()
    {
        $this->assertEquals("127.0.0.1", $this->newLocationService()->getCurrentIp());
    }

    public function test_getting_service_from_facade()
    {
        $this->assertInstanceOf(
            LocationEndpointContract::class,
            $this->newLocationService()->getEndpoint()
        );
    }
}