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
        Schema::create('items', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string(column: 'name', length: 100);
            $table->text(column: 'description');
            $table->string(column: 'brand', length: 50);
            $table->date(column: 'MFD');
            $table->date(column: 'EXP')->nullable();
            $table->string(column: 'slug', length: 100);
            $table->enum(column: 'state', allowed: ['draft', 'published', 'hidden']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
