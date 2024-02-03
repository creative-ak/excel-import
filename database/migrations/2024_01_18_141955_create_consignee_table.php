<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsigneeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignees', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('load_id');
            $table->string('con_name')->nullable();
            $table->string('con_location')->nullable(); 
            $table->date('consign_date')->nullable(); 
            $table->time('consign_time')->nullable(); 
            $table->text('con_description')->nullable(); 
            $table->string('con_type')->nullable(); 
            $table->string('con_qty')->nullable(); 
            $table->string('con_weight')->nullable(); 
            $table->string('con_amt')->nullable(); 
            $table->text('con_notes')->nullable(); 
            $table->text('con_po_number')->nullable(); 
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
