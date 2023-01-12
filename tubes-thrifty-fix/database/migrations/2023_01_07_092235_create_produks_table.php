<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            
            $table->string("img1")->nullable();
            $table->string("img2")->nullable();
            $table->string("img3")->nullable();
            $table->string("namaproduk");
            $table->string("kategori");
            $table->enum('kondisi', ['seperti baru', 'baik', 'kurang']);
            $table->string("deskripsiproduk");
            $table->string("ukuranproduk");
            $table->enum('status', ['on', 'off'])->default('off');
            $table->string("hargaproduk");
            $table->string("stok");
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
