<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("excerpt");
            $table->text("content");
            $table->string("image");
            $table->foreignId("author_id")->constrained("users");
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
