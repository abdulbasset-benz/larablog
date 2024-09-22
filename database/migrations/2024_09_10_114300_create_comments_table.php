<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->longText('content'); // Use longText for comment content
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // References 'id' on 'users'
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade'); // References 'id' on 'posts'
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

