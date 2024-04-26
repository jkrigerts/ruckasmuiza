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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained()->restrictOnDelete();
            $table->string('title', 100);
            $table->date('happens_at');
            $table->string('time', 50);
            $table->string('timeLong', 100)->nullable();
            $table->string('info', 100);
            $table->string('infoLong', 255)->nullable();
            $table->string('price', 50);
            $table->boolean('cancelled')->default(false);
            $table->boolean('published');
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
