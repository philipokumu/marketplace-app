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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->double('price',8,2);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('slug')->nullable();
            $table->string('description');
            $table->string('currency');
            $table->string('mobile');
            $table->string('email');
            $table->dateTime('date_online');
            $table->dateTime('date_offline')->nullable();
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
        Schema::dropIfExists('listings');
    }
};
