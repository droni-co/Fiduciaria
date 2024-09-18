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
    Schema::create('cifs', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->unsignedInteger('code')->unique();
      $table->foreignUuid('trust_id')->constrained();
      $table->string('name');
      $table->boolean('active')->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('cifs');
  }
};
