<?php
// prendiamo la tabella dei post e la stiamo andando a modificare

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignCategoryPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // aggiunta colonna
            $table->unsignedBigInteger('category_id')->after('id');
            // collegata con rispettiva colonna con chiave primaria
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function(Blueprint $table) {
            // cancelliamo la relazione tra category_id e posts.id
            $table->dropForeign(['category_id']);
            // elimino la colonna category_id
            $table->dropColumn('category_id');
        });
    }
}
