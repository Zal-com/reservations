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
        Schema::create('representations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('show_id');
            $table->datetime('when');
            $table->foreignId('location_id');

            //Foreign Key
            $table->foreign('show_id')->references('id')->on('shows')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('representations');
    }
};
