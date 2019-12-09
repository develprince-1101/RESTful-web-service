<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->string('contact_number');
            $table->unsignedBigInteger('business_type_id');
        });

        Schema::table('business_entities', function (Blueprint $table) {
            $table->foreign('business_type_id')->references('id')->on('business_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_entities');
    }
}
