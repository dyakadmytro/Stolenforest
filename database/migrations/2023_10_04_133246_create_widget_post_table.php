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
        Schema::create('widget_post', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Widget::class);
            $table->foreignIdFor(\App\Models\Post::class);

            $table->index('widget_id', 'post_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('widget_post');
    }
};
