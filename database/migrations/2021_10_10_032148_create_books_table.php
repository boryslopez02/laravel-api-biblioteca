<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->string('publisher', 150);
            $table->string('category');
            $table->longText('content');
            $table->longText('content_short');
            $table->string('author');
            $table->string('img_small');
            $table->string('img_big');
            $table->string('language');
            $table->string('page_nums');
            $table->string('url_details');
            $table->string('url_download');
            $table->string('publication_date');
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
        Schema::dropIfExists('books');
    }
}
