<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->ipAddress('ip');
            $table->integer('psi_res')->default('3000');
            $table->integer('psi_uts')->default('3000');;
            $table->integer('psi_sw')->default('3000');;
            $table->integer('psi_dr')->default('3000');;
            $table->integer('psi_bank')->default('3000');;
            $table->enum('jumppack_masks', [0, 1]);
            $table->enum('disinfectants', [0, 1]);
            $table->enum('sd_checklist', [0, 1]);
            $table->enum('aed_third', [0, 1]);
            $table->enum('aed_second', [0, 1]);
            $table->integer('psi_oxy_third')->default('2000');;
            $table->integer('psi_oxy_second')->default('2000');;
            $table->integer('compressor_hours')->nullable();
            $table->string('picture_id', 50)->nullable();
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
        Schema::dropIfExists('logs');
    }
}
