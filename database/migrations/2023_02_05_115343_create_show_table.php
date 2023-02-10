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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 60)->unique();
            $table->string('title');
            $table->string('description');
            $table->string('poster_url');
            $table->foreignId('location_id');
            $table->boolean('bookable');
            $table->decimal('price');

            //Foreign Key
            $table->index('location_id');

            //Contraintes d'intégrité référencielle
            $table->foreign('location_id')->references('id')->on('locations')
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
        Schema::dropIfExists('show');
    }
};
