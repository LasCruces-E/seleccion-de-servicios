<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->integer("numero");
            $table->string("nombre");
            $table->date("dia");
            $table->time("hora");
            $table->integer("personas");
            $table->bigInteger("telefono");
            $table->foreignId("id_producto")->constrained("food");
            $table->foreignId("id_servicio")->constrained("services");
            $table->float("total");
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
        Schema::dropIfExists('reservation');
    }
}
