<?php
use Illuminate\Database\Migrations\Migration;
class CreatePostTable extends Migration
{
    public function up()
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration')->index();

        });
    }
public function down()
{
    Schema::dropIfExists('posts');
}
    }
?>