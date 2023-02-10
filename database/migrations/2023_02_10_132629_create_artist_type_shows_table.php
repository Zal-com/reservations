<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('artist_type_shows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_type_id');
            $table->foreignId('show_id');

            //Foreign Keys
            $table->foreign('artist_type_id')->references('id')->on('artist_types')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('show_id')->references('id')->on('shows')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artist_type_shows');
    }
};
