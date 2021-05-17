<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtcLevel4sDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atc_level4_drugs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atc_level4_id')->unsigned();
            $table->unsignedBigInteger('drug_id')->unsigned();
            $table->string('drug_code', 255);

            $table->foreign('atc_level4_id')->references('id')->on('atc_level4s')->onDelete('cascade');
            $table->foreign('drug_id')->references('id')->on('drugs')->onDelete('cascade');
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
        Schema::dropIfExists('atc_level4_drugs');
    }
}
