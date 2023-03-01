<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Contracts;

use Henrotaym\LaravelPackageVersioning\Services\Versioning\Contracts\VersionablePackageContract;
use Henrotaym\LaravelContainerAutoRegister\Services\AutoRegister\Contracts\AutoRegistrableContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;

/**
 * LaravelTrustupIoIpClient package facade implementation contract.
 */
interface LaravelTrustupIoIpClientContract extends VersionablePackageContract, AutoRegistrableContract
{
    /**
     * Getting location service.
     * 
     * @return string
     */
    public function getService(): LocationServiceContract;
}