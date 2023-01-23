<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinteractionHasHerbFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('hinteraction_has_herb_forms')) return;       //add this line to your database file

        Schema::create('hinteraction_has_herb_forms', function (Blueprint $table) {
            $table->id();
            //liaison de hinteraction à herb_forms via hinteraction_has_herb_forms qui est la table pivot
            $table->foreignId('herb_form_id')->constrained();
            $table->foreignId('hinteraction_id')->constrained();
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
        Schema::dropIfExists('hinteraction_has_herb_forms');
    }
}
