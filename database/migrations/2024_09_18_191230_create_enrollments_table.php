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
    Schema::create('enrollments', function (Blueprint $table) {
      $table->id();
      $table->foreignUuid('trust_id')->constrained();
      $table->foreignUuid('user_id')->constrained();
      $table->unique(['trust_id', 'user_id']);
      $table->string('role')->default('consulta');
      $table->boolean('active')->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('enrollments');
  }
};
