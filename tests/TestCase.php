<?php
namespace Henrotaym\LaravelIpClient\Tests;

use Henrotaym\LaravelIpClient\LaravelIpClient;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Henrotaym\LaravelIpClient\Providers\LaravelIpClientServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return LaravelIpClient::class;
    }

    public function getEnvironmentSetUp($app)
    {
        $this->loadMigrations();
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelIpClientServiceProvider::class
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