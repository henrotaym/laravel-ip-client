<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Api\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Henrotaym\LaravelTrustupIoIpClient\Casts\LocationCast;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location\LocationEndpointContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\TrustupIoLocationRelatedModelContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Services\LocationServiceContract;

/**
 * @var Model $this
 */
trait TrustupIoLocationRelatedModel
{
    public function getTrustupIoLocationColumn(): string
    {
        return "location";
    }

    public function setTrustupIoLocationFromCurrentIp(): TrustupIoLocationRelatedModelContract
    {
        /** @var LocationServiceContract */
        $service = app()->make(LocationServiceContract::class);

        return $this->setTrustupIoLocation($service->getCurrentIpLocation());
    }

    public function setTrustupIoLocationByIp(string $ip): TrustupIoLocationRelatedModelContract
    {
        return $this->setTrustupIoLocation(
            $this->getTrustupIoLocationEndpoint()->show($ip)->getLocation()
        );
    }
    
    public function setTrustupIoLocation(?LocationContract $location): TrustupIoLocationRelatedModelContract
    {
        $this->{$this->getTrustupIoLocationColumn()} = $location;

        return $this;
    }

    protected function getTrustupIoLocationEndpoint(): LocationEndpointContract
    {
        return app()->make(LocationEndpointContract::class);
    }

    public function initializeTrustupIoLocationRelatedModel()
    {
        /** @var Model|TrustupIoLocationRelatedModel $this */

        $this->mergeCasts([$this->getTrustupIoLocationColumn() => LocationCast::class]);
    }
}