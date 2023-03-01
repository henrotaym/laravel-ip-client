<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Database;

use Illuminate\Database\Schema\Blueprint;

trait LocationRelatedMigration
{
    protected function createLocationColumn(Blueprint $table, string $column = "location"): void
    {
        $table->json($column)->nullable();
    }
}