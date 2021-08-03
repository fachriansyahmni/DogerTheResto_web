<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaPesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_pesanans', function (Blueprint $table) {
            $table->id();
            $table->string("nomor_pesanan", 255)->unique();
            $table->integer("total_harga")->default(0);
            $table->timestamp("tgl_pesan")->nullable();
            $table->timestamp("tgl_bayar")->nullable();
            $table->string("status_nota", 100)->default("belum lunas");
            $table->integer("kasir_id")->nullable();
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
        Schema::dropIfExists('nota_pesanans');
    }
}
