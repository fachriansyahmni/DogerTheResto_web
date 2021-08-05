<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->integer("harga")->default(0);
            $table->unsignedBigInteger("menu_kategori_id")->nullable();
            $table->integer("stok")->default(0);
            $table->string("menu_status");
            // $table->enum("menu_status", ["available", "not available", "out of stock", "closed"])->default("available");
            $table->boolean("visible")->default(1);
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
        Schema::dropIfExists('menus');
    }
}
