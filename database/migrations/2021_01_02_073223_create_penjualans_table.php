<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblPenjualan', function (Blueprint $table) {
            $table->id();
            $table->datetime('tglTransaksi');
            $table->string('noTransaksi');
            $table->string('idPelanggan');
            $table->string('typeTransaksi');
            $table->string('idSales');
            $table->double('totalTransaksi');
            $table->double('totalBayar');
            $table->double('sisaHutang');
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
        Schema::dropIfExists('tblPenjualan');
    }
}
