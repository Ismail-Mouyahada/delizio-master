<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->string('main_image');
            $table->string('title');
            $table->text('summary');
            $table->text('description');
            $table->integer('likes')->default(0);
            $table->integer('temps_cuisson');
            $table->integer('temps_preparation');
            $table->integer('temps_repos');
            $table->integer('budget');
            $table->string('defficulte');
            $table->string('video');


            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ingredient_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ustencil_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('image_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->index('user_id');
            $table->index('ingredient_id');
            $table->index('ustencil_id');
            $table->index('image_id');

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
        Schema::dropIfExists('recettes');
    }
}