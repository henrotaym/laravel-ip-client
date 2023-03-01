<?php

namespace Henrotaym\LaravelTrustupIoIpClient\Api\Credentials\Location;

use Henrotaym\LaravelApiClient\Contracts\RequestContract;
use Henrotaym\LaravelApiClient\JsonCredential;
use Henrotaym\LaravelTrustupIoIpClient\Facades\LaravelTrustupIoIpClientFacade;

class LocationCredential extends JsonCredential
{
    public function prepare(RequestContract &$request)
    {
        parent::prepare($request);

        $request->setBaseUrl(
            LaravelTrustupIoIpClientFacade::getConfig('api.location.url')
        );
    }
}