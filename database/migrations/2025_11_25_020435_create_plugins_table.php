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
        Schema::create('plugins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('github_id')->index();
            $table->text('slug');
            $table->text('description');
            $table->string('packagist_url');
            $table->smallInteger('health_score')->nullable()->default('1');
            $table->string('type');
            $table->string('current_version_id');
            $table->dateTime('next_scan_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plugins');
    }
};
