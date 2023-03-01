<?php

namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location;

use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;

interface ShowLocationResponseContract
{
	/**
	 * Getting underlying response.
	 * 
	 * @return TryResponseContract
	 */
	public function getResponse(): TryResponseContract;

	/**
	 * Getting Location model.
	 * 
	 * @return LocationContract
	 */
	public function getLocation(): LocationContract;
}
