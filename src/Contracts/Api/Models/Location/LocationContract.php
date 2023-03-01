<?php

namespace Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location;

interface LocationContract
{
    /**
     * Telling if location contains IP only.
     * 
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Getting related ip.
     *
     * @return string
     */
    public function getIp(): string;

    /**
     * Getting related latitude
     *
     * @return string
     */
    public function getLatitude(): ?string;

    /**
     * Getting related longitude.
     *
     * @return string
     */
    public function getLongitude(): ?string;

    /**
     * Getting timezone.
     *
     * @return string
     */
    public function getTimezone(): ?string;

    /**
     * Getting city.
     *
     * @return string
     */
    public function getCity(): ?string;

    /**
     * Getting country.
     *
     * @return string
     */
    public function getCountry(): ?string;
}
