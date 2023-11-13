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
            $table->string('title');
            $table->string('slug')->unique();
            $table->json('tags')->nullable();
            $table->text('content');
            $table->text('description')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('like')->default(0);
            $table->boolean('is_publish')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            // Clé étrangère pour la relation avec l'utilisateur
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
