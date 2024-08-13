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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 0);
            $table->string('category');
            $table->string('slug_1');
            $table->string('slug_2');
            $table->string('saran_penyajian');
            $table->text('saran_penyimpanan');
            $table->string('ketahanan_dingin');
            $table->string('ketahanan_suhu');
            $table->text('rasa');
            $table->text('kandungan');
            $table->text('manfaat');
            $table->text('contoh_sajian');
            $table->string('shoppe');
            $table->string('tokped');
            $table->string('image_1');
            $table->string('image_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

