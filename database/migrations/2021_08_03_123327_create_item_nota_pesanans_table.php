<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemNotaPesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_nota_pesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_nota");
            $table->string("nama_menu");
            $table->integer("qty");
            $table->integer("harga");
            $table->integer("total_harga");
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
        Schema::dropIfExists('item_nota_pesanans');
    }
}
