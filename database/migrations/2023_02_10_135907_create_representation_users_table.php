<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('representation_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('representation_id');
            $table->foreignId('user_id');
            $table->integer('places');

            //Foreign Keys
            $table->foreign('representation_id')->references('id')->on('representations')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('representation_users');
    }
};
