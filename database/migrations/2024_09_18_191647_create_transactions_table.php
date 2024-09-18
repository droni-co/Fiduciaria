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
    Schema::create('transactions', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignUuid('cif_id')->constrained();
      $table->foreignUuid('user_id')->constrained();
      $table->foreignUuid('account_id')->constrained();
      $table->string('transactionType');
      $table->string('description');
      $table->float('amount');
      $table->string('statusCode')->default('pending');
      $table->datetime('dateTransaction')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('transactions');
  }
};
