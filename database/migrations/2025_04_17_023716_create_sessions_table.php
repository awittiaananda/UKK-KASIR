<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->text('payload');
            $table->integer('last_activity')->index();
            // Menambahkan kolom ip_address
            $table->string('ip_address', 45)->nullable(); // Menggunakan 45 untuk mendukung IPv6
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions');
    }
};

