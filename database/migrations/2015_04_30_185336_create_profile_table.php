<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->text('about_me')->nullable();
            $table->string('phone')->nullable();
            $table->string('img_url')->default('/upload/profile/default/avatar.jpg');
            $table->string('thumb_url')->default('/upload/profile/default/icon.jpg');
            $table->string('fb_user')->nullable();
            $table->string('twitter_user')->nullable();
            $table->string('github_user')->nullable();
            $table->string('platform');
            $table->string('position');
            $table->string('organization');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('profile');
    }
}
