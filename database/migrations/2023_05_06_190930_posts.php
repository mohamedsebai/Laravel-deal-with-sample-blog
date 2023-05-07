<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        schema::create('posts', function(Blueprint $table){
           $table->increments('id');
           $table->string('slug');
           $table->string('title');
           $table->longText('description');
           $table->string('image_path');

           $table->unsignedBigInteger('user_id'); // this is forging key will give me users_id bigint(20) same as users.id
           $table->foreign('user_id')->references('id')->on('users'); // create forging key

           $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }

};
