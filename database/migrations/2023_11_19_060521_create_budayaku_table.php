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
        Schema::create('budayaku', function (Blueprint $table) {
            $table->id('id_budaya');
            $table->string('pulau');
            $table->string('suku');
            $table->string('senjata');
            $table->string('rumah_adat');
            $table->string('pakaian_adat');
            $table->string('seni');
            $table->string('bahasa');
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
        Schema::dropIfExists('budayaku');
    }
};
