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
            Schema::create('flights', function (Blueprint $table) {
                $table->id();
                $table->string('name', 100)->nullable();
                $table->string('number', 100)->nullable();
                $table->integer('price')->nullable();
                $table->boolean('active')->default(true);
                $table->boolean('cancelled')->default(false);
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
        Schema::dropIfExists('flights');
    }
};
