<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('movie_cover', 255);
            $table->string('category', 255);
            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')->references('id')->on('persons');
            $table->unsignedBigInteger('production_company_id');
            $table->foreign('production_company_id')->references('id')->on('production_companies');
            $table->integer('year_of_production');
            $table->text('plot_description');
            $table->decimal('price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
