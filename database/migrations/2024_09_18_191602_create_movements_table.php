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
    Schema::create('movements', function (Blueprint $table) {
      $table->id();
      $table->foreignUuid('cif_id')->constrained();
      $table->date('dateMovement');
      $table->date('fundClosure');
      $table->string('type');
      $table->string('description');
      $table->float('amount');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('movements');
  }
};
