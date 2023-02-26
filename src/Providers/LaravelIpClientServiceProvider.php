<?php
namespace Henrotaym\LaravelIpClient\Providers;

use Henrotaym\LaravelIpClient\LaravelIpClient;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelIpClientServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return LaravelIpClient::class;
    }

    protected function addToRegister(): void
    {
        //
    }

    protected function addToBoot(): void
    {
        //
    }
}