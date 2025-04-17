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

        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id')->nullable();
            $table->date('tanggal');
            $table->integer('total_harga')->default(0);
            $table->unsignedBigInteger('user_id'); // tanpa after
            $table->integer('total_bayar')->default(0); // tanpa after
            $table->integer('kembalian')->default(0); // tanpa after
            $table->enum('status_member', ['member', 'non-member'])->default('non-member'); // tanpa after
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
