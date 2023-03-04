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
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table
                ->integer('selling_count')
                ->default(0);

            $table->foreignIdFor(
                model: \App\Models\User::class,
                column: 'user_id',
            );

            $table->foreignIdFor(
                model: \App\Models\Category::class,
                column: 'category_id',
            );

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
