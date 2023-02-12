<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_artist');
            $table->string('name_reviewer');
            $table->string('surname_reviewer');
            $table->tinyInteger('vote_artist_review');
            $table->text('text_artist_review');
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
        Schema::dropIfExists('artist_reviews');
    }
}
