<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrowthTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('growth_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('green_house_id');
            $table->enum('type',['growth', 'planting', 'nursery'])->default('growth');
            $table->unsignedInteger('number_of_growth_holes')->default(240);
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
        Schema::dropIfExists('growth_tables');
    }
}
