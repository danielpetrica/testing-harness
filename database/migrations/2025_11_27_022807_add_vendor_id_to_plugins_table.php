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
        Schema::table('plugins', function (Blueprint $table) {
            // Add vendor_id with a foreign key to vendors.id
            $table->foreignId('vendor_id')
                ->nullable()
                ->after('id')
                ->constrained('vendors')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plugins', function (Blueprint $table) {
            // Drop FK then column
            $table->dropConstrainedForeignId('vendor_id');
        });
    }
};
