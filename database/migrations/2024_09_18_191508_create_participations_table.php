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
    Schema::create('participations', function (Blueprint $table) {
      $table->id();
      $table->foreignUuid('client_id')->constrained();
      $table->foreignUuid('trust_id')->constrained();
      $table->unique(['client_id', 'trust_id']);
      $table->float('participation');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('participations');
  }
};
