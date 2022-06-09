<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            // Constant raw data

            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('username');
            $table->string('photo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            // forgein keys

            $table->foreignId('recette_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('comment_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('note_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // for faster HTTP requests

            $table->index('recette_id');
            $table->index('comment_id');
            $table->index('note_id');
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
        Schema::dropIfExists('users');
    }
}