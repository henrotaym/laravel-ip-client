<?php
namespace Henrotaym\LaravelTrustupIoIpClient;

use Illuminate\Http\Request;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\LaravelTrustupIoIpClientContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;

class LaravelTrustupIoIpClient extends VersionablePackage implements LaravelTrustupIoIpClientContract
{
    public function __construct(
        protected LocationServiceContract $service
    ) {}

    public static function prefix(): string
    {
        return "laravel_trustup_io_ip_client";
    }

    public function getService(): LocationServiceContract
    {
        return $this->service;
    }
}