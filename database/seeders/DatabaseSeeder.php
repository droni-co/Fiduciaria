<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->create([
      'name' => 'Kalvin Manson',
      'email' => 'kalvinmanson@gmail.com',
      'password' => bcrypt('Kalvinista01'),
      'docType' => 'CC',
      'docNumber' => '1234567890'
    ]);
  }
}
