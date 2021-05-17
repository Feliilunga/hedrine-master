<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugFamiliesDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_families_drugs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drug_family_id')->unsigned();
            $table->unsignedBigInteger('drug_id')->unsigned();

            $table->foreign('drug_family_id')->references('id')->on('drug_families')->onDelete('cascade');
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
        Schema::dropIfExists('drug_families_drugs');
    }
}
