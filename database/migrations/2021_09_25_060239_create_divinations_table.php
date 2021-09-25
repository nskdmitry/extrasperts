<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_extra')->comment("This extrasexers make divination");
            $table->bigInteger('id_history');
            $table->bigInteger('telling')->comment("Extrasexer say: user wish a it number");
            $table->timestamps();
            $table->foreign('id_extra')->references('id')->on('extrasexers');
            $table->foreign('id_history')->references('id')->on('user_stories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divinations');
    }
}
