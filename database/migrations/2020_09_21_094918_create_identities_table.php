<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->integer("rider_id");
            $table->enum("blood", ["0 Rh (-)", "0 Rh (+)", "A Rh (-)", "A Rh (+)", "B Rh (-)", "B Rh (+)", "AB Rh (-)", "AB Rh (+)"]);
            $table->date("born_date");
            $table->string("born_place");
            $table->bigInteger("national_id");
            $table->string("mother_name");
            $table->string("father_name");
            $table->string("marital_status", 10);
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
        Schema::dropIfExists('identities');
    }
}
