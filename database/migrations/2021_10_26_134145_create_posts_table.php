<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\Cast\String_;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table -> string('publication') -> nullable() -> default('text');
            $table -> enum('state_publication',['published','reject', 'in_review']) ->
             nullable() -> default('in_review');
            $table -> text('content_publication') -> nullable();
            $table -> bigInteger('category_id')->nullable()->unsigned();
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
        Schema::dropIfExists('posts');
    }
}
