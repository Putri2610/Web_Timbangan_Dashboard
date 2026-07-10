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
         Schema::create('monitoring_logs', function (Blueprint $table) {
        $table->id();

        $table->foreignId('server_config_id')
              ->constrained()
              ->onDelete('cascade');

        $table->string('jalur_aktif');

        $table->string('ip_aktif');

        $table->boolean('status');

        $table->timestamp('last_checked');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring_logs');
    }
};
