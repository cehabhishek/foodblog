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
        Schema::create('newslatters', function (Blueprint $table) {
            $table->id();
            $table->string('template_id',10);
            $table->string('type',255)->nullable();
            $table->string('unique_id',100)->nullable();
            $table->string('data_value',100)->nullable();
            $table->string('redirect_url',255 )->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newslatters');
    }
};
