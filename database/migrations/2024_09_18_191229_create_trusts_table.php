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
      Schema::create('trusts', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->unsignedInteger('code')->unique();
        $table->string('name');
        $table->date('openDate');
        $table->date('closeDate');
        $table->integer('deliveryDay')->default(1);
        $table->string('deliveryType')->default('habil');
        $table->string('status')->default('Abierto');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trusts');
    }
};
