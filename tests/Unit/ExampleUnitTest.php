<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Unit;

use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;
use Henrotaym\LaravelTrustupIoIpClient\Facades\LaravelTrustupIoIpClientFacade;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;

class ExampleUnitTest extends TestCase
{
    public function test_it_can_instanciate_facade()
    {
        $this->assertInstanceOf(
            LaravelTrustupIoIpClientFacade::class,
            $this->app->make(LaravelTrustupIoIpClientFacade::class)
        );
    }

    public function test_getting_service_from_facade()
    {
        $this->assertInstanceOf(
            LocationServiceContract::class,
            LaravelTrustupIoIpClientFacade::getService()
        );
    }
}