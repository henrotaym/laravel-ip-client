<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Henrotaym\LaravelTrustupIoIpClient\Api\Models\Location\TrustupIoLocationRelatedModel;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\TrustupIoLocationRelatedModelContract;
use Henrotaym\LaravelTrustupIoIpClient\Tests\Factories\DocumentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model implements TrustupIoLocationRelatedModelContract
{
    use TrustupIoLocationRelatedModel, HasFactory;

    protected static function newFactory(): DocumentFactory
    {
        return app()->make(DocumentFactory::class);
    }

    public function getTrustupIoLocationColumn(): string
    {
        return "customLocation";
    }
}