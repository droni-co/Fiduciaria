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
    Schema::create('accounts', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignUuid('user_id')->constrained();
      $table->string('category')->default('propia');
      $table->string('bankCode');
      $table->string('accountType')->default('ahorros');
      $table->string('accountNumber');
      $table->string('holderName');
      $table->string('holderDocType')->default('CC');
      $table->string('holderDocNumber');
      $table->boolean('active')->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('accounts');
  }
};
