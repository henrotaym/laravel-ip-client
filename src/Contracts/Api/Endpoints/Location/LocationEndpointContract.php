<?php

namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Endpoints\Location;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Responses\Location\ShowLocationResponseContract;

interface LocationEndpointContract
{
	/**
	 * Getting details concerning given ip.
	 * 
	 * @param string $ip
	 * @return ShowLocationResponseContract
	 */
	public function show(string $ip): ShowLocationResponseContract;
}
