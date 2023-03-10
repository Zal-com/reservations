<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('artist_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id');
            $table->foreignId('type_id');

            //Foreign Keys
            $table->foreign('artist_id')->references('id')->on('artists')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('type_id')->references('id')->on('types')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artist_types');
    }
};
