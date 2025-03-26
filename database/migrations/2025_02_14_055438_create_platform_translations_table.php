<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('platform_key_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platform_key_id')->constrained('platform_keys')->onDelete('cascade');
            $table->string('locale', 10); // ✅ Change from 'language_code' to 'locale'
            $table->string('translation');
            $table->unique(['platform_key_id', 'locale']); // Ensures unique translation per locale
        });
    }

    public function down()
    {
        Schema::dropIfExists('platform_key_translations');
    }
};

