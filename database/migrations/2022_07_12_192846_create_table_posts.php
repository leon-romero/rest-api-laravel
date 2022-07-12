<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosts extends Migration
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
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('title')->nullable();
            $table->string('body', 3000)->nullable();
            $table->timestamps();
        });

        $faker = Faker\Factory::create();

        for ($i=0; $i < 150; $i++) {
            $p = new Post();
            $p->user_id = $faker->numberBetween(1,50);
            $p->title = $faker->title();
            $p->body = $i . $faker->email();
            $p->save();
        }
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
