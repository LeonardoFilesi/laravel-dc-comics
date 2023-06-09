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
        Schema::create('dccomics', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('thumb')->nullable();
            $table->string('price', 10);
            $table->string('series', 50)->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type', 30)->nullable();
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
       Schema::drop('dccomics');
    }
};
