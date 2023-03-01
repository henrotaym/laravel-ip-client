<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Factories;

use Henrotaym\LaravelTrustupIoIpClient\Tests\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition()
    {
        return [
            "customLocation" => null
        ];
    }
}