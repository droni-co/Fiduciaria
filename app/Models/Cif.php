<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Cif extends Model
{
  use HasFactory, HasUuids;

  public function trust()
  {
    return $this->belongsTo(Trust::class);
  }
  public function balances()
  {
    return $this->hasMany(Balance::class);
  }
  public function movements()
  {
    return $this->hasMany(Movement::class);
  }
}
