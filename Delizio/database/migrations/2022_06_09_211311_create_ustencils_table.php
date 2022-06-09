<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUstencilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ustencils', function (Blueprint $table) {
            
            $table->id();
            $table->string('nom');
            $table->integer('quantite');

            // Forgeinkey for each recipe linked to its kitchen tools
            $table->foreignId('recette_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // Recipe better HTTP request
            $table->index('recette_id');

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
        Schema::dropIfExists('ustencils');
    }
}