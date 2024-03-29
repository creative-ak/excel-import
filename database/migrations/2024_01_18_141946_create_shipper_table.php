<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('load_id');
            $table->string('name')->nullable();
            $table->string('location')->nullable(); 
            $table->date('ship_date')->nullable();
            $table->time('ship_time')->nullable(); 
            $table->text('description')->nullable(); 
            $table->string('type')->nullable(); 
            $table->string('qty')->nullable(); 
            $table->string('weight')->nullable(); 
            $table->string('amt')->nullable(); 
            $table->text('notes')->nullable(); 
            $table->text('po_number')->nullable(); 
            $table->string('customs_broker')->nullable(); 
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
        Schema::dropIfExists('shipper');
    }
}
