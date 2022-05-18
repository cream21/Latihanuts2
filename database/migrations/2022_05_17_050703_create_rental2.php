<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRental2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental2', function (Blueprint $table) {
            $table->bigIncrements('id_barang');
            $table->string('nama_barang',60);
            $table->string('nama_penyewa',100);
            $table->string('harga_sewa',20);
            $table->integer('jumlah_sewa');
            $table->text('keterangan');
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
        Schema::dropIfExists('rental2');
    }
}
