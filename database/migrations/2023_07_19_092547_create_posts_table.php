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
            $table->string('category_id',10);
            $table->string('sub_category',50);
            $table->string('sub_category_id',50);
            $table->string('title',255);
            $table->string('slug',255);
            $table->longText('keywords');
            $table->string('thumbnail',255);
            $table->text('meta_description');
            $table->longText('description');
            $table->string('country',100);
            $table->string('date',100);
            $table->string('visibility',10);
            $table->string('views',255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
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
