<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Trust extends Model
{
  use HasFactory, HasUuids;

  public function enrollments()
  {
    return $this->hasMany(Enrollment::class);
  }
  public function cifs()
  {
    return $this->hasMany(Cif::class);
  }
}
