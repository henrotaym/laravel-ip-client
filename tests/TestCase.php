<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests;

use Henrotaym\LaravelTrustupIoIpClient\LaravelTrustupIoIpClient;
use Henrotaym\LaravelApiClient\Providers\ClientServiceProvider;
use Henrotaym\LaravelTrustupIoIpClient\Providers\LaravelTrustupIoIpClientServiceProvider;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;

class TestCase extends VersionablePackageTestCase
{
    use AppTestSuite;
    
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoIpClient::class;
    }

    public function getEnvironmentSetUp($app)
    {
        $this->loadMigrations();
    }
    
    public function getServiceProviders(): array
    {
        return [
            ClientServiceProvider::class,
            LaravelTrustupIoIpClientServiceProvider::class
        ];
    }

    protected function loadMigrations()
    {
        foreach($this->getMigrations() as $migration):
            app()->make($migration)->up();
        endforeach;
    }

    /**
     * Define your migrations files here.
     * 
     * @return array<int, string> 
     */
    protected function getMigrations(): array
    {
        return [];
    }
}