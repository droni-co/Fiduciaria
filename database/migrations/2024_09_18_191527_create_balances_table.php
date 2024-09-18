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
    Schema::create('balances', function (Blueprint $table) {
      $table->id();
      $table->foreignUuid('cif_id')->constrained();
      $table->date('dateBanalce');
      $table->unique(['cif_id', 'dateBanalce']);
      $table->float('total');
      $table->float('available');
      $table->float('blocked');
      $table->float('cancelation');
      $table->float('gmf');
      $table->float('retention');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('balances');
  }
};
