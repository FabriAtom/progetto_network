<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_artist');
            $table->unsignedBigInteger('id_company');
            $table->string('name_sender');
            $table->string('surname_sender');
            $table->string('mail_sender');
            $table->text('message_sender');
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
        Schema::dropIfExists('artist_messages');
    }
}
