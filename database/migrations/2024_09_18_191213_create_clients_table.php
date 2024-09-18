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
    Schema::create('clients', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('clientType')->default('Juridico');
      $table->string('docType')->default('NIT');
      $table->string('docNumber')->notNullable();
      $table->unique(['docType', 'docNumber']);
      $table->string('name');
      $table->string('email')->nullable();
      $table->string('identificator')->nullable();
      $table->string('cityCode')->nullable();
      $table->string('phone')->nullable();
      $table->string('address')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('clients');
  }
};
