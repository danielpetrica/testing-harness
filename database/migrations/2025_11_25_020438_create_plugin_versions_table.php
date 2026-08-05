<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plugin_versions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('plugin_id');
            $table->string('version');
            $table->dateTime('release_date');
            $table->text('composer_json');
            $table->text('package_json');
            $table->json('compatibility')->nullable();
            $table->text('major_changes');
            $table->bigInteger('download_count');
            $table->string('release_notes_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plugin_versions');
    }
};
