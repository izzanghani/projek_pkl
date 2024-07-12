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
            $table->string('nama_produk');
            $table->integer('stok');
            $table->string('harga');
            $table->bigInteger('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references('id')->on('kategoris')->ondelete('cascade');
            $table->bigInteger('id_supplier')->unsigned();
            $table->foreign('id_supplier')->references('id')->on('suppliers')->ondelete('cascade');
            $table->string('cover');


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
