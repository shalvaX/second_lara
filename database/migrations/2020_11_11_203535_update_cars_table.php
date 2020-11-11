<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('license_number')->nullable();
            $table->float('weight')->nullable();
            $table->date('registration_year')->nullable();
            $table-> float('age')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
