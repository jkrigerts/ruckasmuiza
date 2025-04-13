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
        Schema::create('event_signups', function (Blueprint $table) {
            $table->id();
            $table->foreignId("events_id")->constrained("events")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("name");
            $table->string("surname");
            $table->string("email")->nullable();
            $table->string("phone_number")->nullable();
            $table->integer("count");
            $table->string("notes", 2000)->nullable();
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_signups');
    }
};
