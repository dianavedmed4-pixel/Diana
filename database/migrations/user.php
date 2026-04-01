<?php
use Illuminate\Database\Migrations\Migration;
class CreatePostTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){

        })
    }
public function down()
{
    Schema::dropIfExists('posts');
}
    }
?>