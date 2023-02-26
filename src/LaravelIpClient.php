<?php
namespace Henrotaym\LaravelIpClient;

use Henrotaym\LaravelIpClient\Contracts\LaravelIpClientContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class LaravelIpClient extends VersionablePackage implements LaravelIpClientContract
{
    public static function prefix(): string
    {
        return "laravel_ip_client";
    }
}