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
        Schema::create('disasters', function (Blueprint $table) {
            $table->id();
            $table->string('bencana');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->timestamp('waktu');
            $table->string('penyebab')->nullable();
            $table->bigInteger('kerugian')->nullable();
            $table->Integer('luka')->nullable();
            $table->Integer('meninggal')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disasters');
    }
};
