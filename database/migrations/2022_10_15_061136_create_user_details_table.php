<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->text('addr_1')->nullable();
            $table->text('addr_2')->nullable();
            $table->bigInteger('postal_code')->nullable();
            $table->string('state')->nullable();
            $table->string('area')->nullable();
            $table->string('education')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('experience_design')->nullable();
            $table->string('additional_detail')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
