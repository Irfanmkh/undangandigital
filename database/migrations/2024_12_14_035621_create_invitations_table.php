<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('template_id')->constrained('templates')->onDelete('cascade');
            $table->string('groom_name');
            $table->string('bride_name');
            $table->date('wedding_date');
            $table->string('venue');
            $table->string('link_venue');
            $table->string('background_image')->nullable();
            $table->string('music_file')->nullable();
            $table->enum('status', ['in_progress', 'finalized', 'sent'])->default('in_progress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
