<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Facades;

use Henrotaym\LaravelTrustupIoIpClient\LaravelTrustupIoIpClient;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;

/**
 * @method static LocationServiceContract getService() Getting IP service.
 */
class LaravelTrustupIoIpClientFacade extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoIpClient::class;
    }
}