<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pesanan_id");
            $table->unsignedBigInteger("menu_id");
            $table->integer("qty");
            $table->integer("amount");
            $table->timestamps();

            $table->foreign("pesanan_id")->references("id")->on("pesanans")->cascadeOnDelete();
            $table->foreign("menu_id")->references("id")->on("menus");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_items');
    }
}
