<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Providers;

use Henrotaym\LaravelTrustupIoIpClient\LaravelTrustupIoIpClient;
use Henrotaym\LaravelTrustupIoIpClient\Services\LocationService;
use Henrotaym\LaravelTrustupIoIpClient\Api\Models\Location\Location;
use Henrotaym\LaravelTrustupIoIpClient\Api\Endpoints\Location\LocationEndpoint;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;
use Henrotaym\LaravelTrustupIoIpClient\Api\Responses\Location\ShowLocationResponse;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location\EmptyLocationFactory;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Clients\Location\LocationClientFactory;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location\FromApiLocationFactory;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location\LocationEndpointContract;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Requests\Location\ShowLocationRequestFactory;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location\FromAttributesLocationFactory;
use Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Responses\Location\ShowLocationResponseFactory;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location\ShowLocationResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\EmptyLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Clients\Location\LocationClientFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromApiLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Requests\Location\ShowLocationRequestFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromAttributesLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Responses\Location\ShowLocationResponseFactoryContract;

class LaravelTrustupIoIpClientServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoIpClient::class;
    }

    protected function addToRegister(): void
    {
        $this->app->bind(LocationClientFactoryContract::class, LocationClientFactory::class);
        $this->app->bind(EmptyLocationFactoryContract::class, EmptyLocationFactory::class);
        $this->app->bind(FromApiLocationFactoryContract::class, FromApiLocationFactory::class);
        $this->app->bind(FromAttributesLocationFactoryContract::class, FromAttributesLocationFactory::class);
        $this->app->bind(ShowLocationRequestFactoryContract::class, ShowLocationRequestFactory::class);
        $this->app->bind(ShowLocationResponseFactoryContract::class, ShowLocationResponseFactory::class);
        $this->app->bind(LocationEndpointContract::class, LocationEndpoint::class);
        $this->app->bind(LocationContract::class, Location::class);
        $this->app->bind(ShowLocationResponseContract::class, ShowLocationResponse::class);
        $this->app->bind(LocationServiceContract::class, LocationService::class);
    }

    protected function addToBoot(): void
    {
        //
    }
}