<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->string('load_no')->nullable();
            $table->string('bill_to')->nullable();
            $table->string('dispatcher')->nullable();
            $table->string('sale_rep')->nullable();
            $table->string('status')->nullable();
            $table->string('wo')->nullable();
            $table->string('type')->nullable();
            $table->string('type_rate')->nullable();
            $table->string('pds')->nullable();
            $table->string('fsc')->nullable();
            $table->string('fsc_rate')->nullable();
            $table->string('other_charges')->nullable();
            $table->string('usd_rate')->nullable();
            $table->string('carrier')->nullable();
            $table->string('driver')->nullable();
            $table->string('equipment_type')->nullable();
            $table->string('truck')->nullable();
            $table->string('trailer')->nullable();
            $table->string('flat_rate')->nullable();
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
        Schema::dropIfExists('loads');
    }
}
