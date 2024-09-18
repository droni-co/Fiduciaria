<?php

namespace App\Enums;

enum Doctype: string
{
  case CC = 'Cédula de Ciudadanía';
  case NIT = 'NIT';

  public static function values(): array
  {
    return array_column(self::cases(), 'name', 'value');
  }
}
