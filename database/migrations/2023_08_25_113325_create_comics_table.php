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
    Schema::create('comics', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('description')->nullable();
      $table->text('thumb');
      $table->string('price', 10);
      $table->date('sale_date')->nullable();
      $table->string('series', 100)->nullable();
      $table->string('type', 100);
      $table->string('artists')->nullable();
      $table->string('writers')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('comics');
  }
};
