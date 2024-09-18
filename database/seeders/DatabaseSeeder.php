<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\Trust;
use App\Models\Enrollment;
use App\Models\Cif;
use App\Models\Participation;
use App\Models\Balance;
use App\Models\Movement;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::create(
      [
        'name' => 'Kalvin Manson',
        'email' => 'kalvinmanson@gmail.com',
        'password' => bcrypt('Kalvinista01'),
        'docType' => 'CC',
        'docNumber' => '1234567890'
      ],
      [
        'name' => 'Usuario Consulta',
        'email' => 'consulta@gmail.com',
        'password' => bcrypt('consulta01'),
        'docType' => 'CC',
        'docNumber' => '88888888'
      ]
    );

    Client::create([
      'docType' => 'NIT',
      'docNumber' => '900100200',
      'name' => 'Droni.co',
      'email' => 'info@droni.co',
      'identificator' => 'Core-123',
      'cityCode' => '11001',
      'phone' => '1234567',
      'address' => 'Calle 123 # 45-67'
    ]);

    Trust::create(
      [
        'code' => 100284,
        'name' => 'Fiducia de Prueba',
        'openDate' => '2024-09-18',
        'closeDate' => '2024-09-18'
      ],
      [
        'code' => 100285,
        'name' => 'Fiducia de Prueba 2',
        'openDate' => '2024-09-18',
        'closeDate' => '2024-09-18'
      ]
    );

    Enrollment::create(
      [
        'trust_id' => Trust::first()->id,
        'user_id' => User::first()->id,
        'role' => 'admin'
      ]
    );
    Cif::create(
      [
        'trust_id' => Trust::first()->id,
        'code' => 93910000012,
        'name' => 'Cif de Prueba'
      ]
    );
    Participation::create(
      [
        'client_id' => Client::first()->id,
        'trust_id' => Trust::first()->id,
        'participation' => 98.5
      ]
    );
    $cif = Cif::first();
    Balance::create(
      [
        'cif_id' => $cif->id,
        'dateBanalce' => '2024-09-18',
        'total' => 125000000,
        'available' => 125000000,
        'blocked' => 450000,
        'cancelation' => 5695000,
        'gmf' => 15998500,
        'retention' => 10000
      ],
      [
        'cif_id' => $cif->id,
        'dateBanalce' => '2024-09-19',
        'total' => 125050000,
        'available' => 125000000,
        'blocked' => 456000,
        'cancelation' => 5695000,
        'gmf' => 16998500,
        'retention' => 10500
      ],
      [
        'cif_id' => $cif->id,
        'dateBanalce' => '2024-09-20',
        'total' => 125000000,
        'available' => 125000000,
        'blocked' => 450000,
        'cancelation' => 5695000,
        'gmf' => 15998500,
        'retention' => 10000
      ],
      [
        'cif_id' => $cif->id,
        'dateBanalce' => '2024-09-21',
        'total' => 125050000,
        'available' => 125000000,
        'blocked' => 456000,
        'cancelation' => 5695000,
        'gmf' => 16998500,
        'retention' => 10500
      ]
    );

    Movement::create(
      [
        'cif_id' => $cif->id,
        'dateMovement' => '2024-09-18',
        'fundClosure' => '2024-09-18',
        'type' => 'Ingreso',
        'description' => 'Ingreso de Prueba',
        'amount' => 1000000
      ],
      [
        'cif_id' => $cif->id,
        'dateMovement' => '2024-09-18',
        'fundClosure' => '2024-09-18',
        'type' => 'Egreso',
        'description' => 'Egreso de Prueba',
        'amount' => -500000
      ],
      [
        'cif_id' => $cif->id,
        'dateMovement' => '2024-09-20',
        'fundClosure' => '2024-09-20',
        'type' => 'Ingreso',
        'description' => 'Ingreso de Prueba',
        'amount' => 1000000
      ],
      [
        'cif_id' => $cif->id,
        'dateMovement' => '2024-09-21',
        'fundClosure' => '2024-09-21',
        'type' => 'Egreso',
        'description' => 'Egreso de Prueba',
        'amount' => -500000
      ]
    );

  }
}
