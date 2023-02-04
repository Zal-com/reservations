<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 60)->unique();
            $table->string('designation', 60);
            $table->string('address');
            $table->string('website');
            $table->string('phone', 30);
            $table->foreignId('locality_id');

            //Foreign Key
            $table->index('locality_id');

            //Contraintes d'intégrité référencielle
            $table->foreign('locality_id')->references('id')->on('localities')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('locations');
    }
};
