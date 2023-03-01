<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Feature;

use Henrotaym\LaravelTrustupIoIpClient\Tests\TestCase;
use Henrotaym\LaravelTrustupIoIpClient\Tests\Models\Document;
use Henrotaym\LaravelTrustupIoIpClient\Contracts\Api\Models\Location\LocationContract;
use Henrotaym\LaravelTrustupIoIpClient\Tests\Database\Migrations\CreateDocumentsTable;

class TrustupIoLocationRelatedModelTest extends TestCase
{
    protected function getMigrations(): array
    {
        return [CreateDocumentsTable::class];
    }

    public function test_model_casting_to_null_when_no_value()
    {
        $document = Document::factory()->create();

        $this->assertNull($document->fresh()->customLocation);
    }

    public function test_model_casting_to_model_when_containing_value()
    {
        $locationFactory = $this->newEmptyLocationFactory();
        $document = Document::factory()->create();
        $document->customLocation = $locationFactory->create("test");
        $document->save();

        $this->assertInstanceOf(LocationContract::class, $document->fresh()->customLocation);
    }

    public function test_model_setting_location_based_on_ip()
    {
        /** @var Document */
        $document = Document::factory()->create();
        $document->setTrustupIoLocationByIp("test")->save();

        $this->assertInstanceOf(LocationContract::class, $document->fresh()->customLocation);
    }
}