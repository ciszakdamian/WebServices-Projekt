<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Filmy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmy', function (Blueprint $table) {
            $table->id();
            $table->string('tytul', 255);
            $table->string('okladka', 255);
            $table->string('kategoria', 255);
            $table->string('rezyser', 255);
            $table->integer('rok_produkcji');
            $table->text('opis_fabuly');
            $table->decimal('cena', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmy');
    }
}
