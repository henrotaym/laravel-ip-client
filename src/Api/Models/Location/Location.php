<?php

namespace Henrotaym\LaravelTrustupIoIpClient\Api\Models\Location;

use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;

class Location implements LocationContract
{
    public function __construct(
        protected string $ip,
        protected ?string $latitude = null,
        protected ?string $longitude = null,
        protected ?string $timezone = null,
        protected ?string $city = null,
        protected ?string $country = null,
    ) {}

    /**
     * Getting related ip.
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * Getting related latitude
     *
     * @return string
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Getting related longitude.
     *
     * @return string
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * Getting timezone.
     *
     * @return string
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * Getting city.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Getting country.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function isEmpty(): bool
    {
        return is_null($this->latitude);
    }
}
