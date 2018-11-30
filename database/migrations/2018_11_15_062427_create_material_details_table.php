<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('measurement_id');
            $table->string('mat_code');
            $table->string('mat_name');
            $table->string('mat_category');
            $table->string('mat_price');
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
        Schema::dropIfExists('material_details');
    }
}
