<?php
namespace Henrotaym\LaravelIpClient\Tests\Unit;

use Henrotaym\LaravelIpClient\Tests\TestCase;
use Henrotaym\LaravelIpClient\Facades\LaravelIpClientFacade;

class ExampleUnitTest extends TestCase
{
    public function test_it_can_instanciate_facade()
    {
        $this->assertInstanceOf(
            LaravelIpClientFacade::class,
            $this->app->make(LaravelIpClientFacade::class)
        );
    }
}