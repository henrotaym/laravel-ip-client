<?php
namespace Henrotaym\LaravelTrustupIoIpClient\Tests\Database\Migrations;

use Henrotaym\LaravelTrustupIoIpClient\Database\LocationRelatedMigration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    use LocationRelatedMigration;

    public function up()
    {
        Schema::create("documents", function (Blueprint $table) {
            $table->id();
            $this->createLocationColumn($table, "customLocation");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop("documents");
    }
}