<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->string('dir');
            $table->integer('mandatory')->nullable();
            $table->integer('seminar_id');
            $table->integer('presentation_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('documents');
    }
};
