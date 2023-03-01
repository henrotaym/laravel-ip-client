<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Factories\Api\Models\Location;

use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\EmptyLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromApiLocationFactoryContract;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Factories\Api\Models\Location\FromAttributesLocationFactoryContract;

class FromApiLocationFactory implements FromApiLocationFactoryContract
{
    public function __construct(
        protected EmptyLocationFactoryContract $emptyFactory,
        protected FromAttributesLocationFactoryContract $attributesFactory
    ) {}

    protected ?array $body;

    public function create(string $ip, TryResponseContract $response): LocationContract
    {
        $this->setBody($response);

        if ($this->requestFailed($response)) return $this->emptyFactory->create($ip);

        return $this->attributesFactory->create([
            "ip" => $ip,
            "latitude" => $this->body["lat"],
            "longitude" => $this->body["lon"],
            "timezone" => $this->body["timezone"],
            "city" => $this->body["city"],
            "country" => $this->body["country"],
        ]);
    }

    protected function setBody(TryResponseContract $response)
    {
        $this->body = $response->response()?->get(true);
    }

    protected function requestFailed(TryResponseContract $response): bool
    {
        if ($response->failed()) return true;
        
        $status = $this->body["status"] ?? null;

        return $status !== "success";
    }
}