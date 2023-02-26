<?php
namespace Henrotaym\LaravelIpClient\Facades;

use Henrotaym\LaravelIpClient\LaravelIpClient;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

class LaravelIpClientFacade extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return LaravelIpClient::class;
    }
}