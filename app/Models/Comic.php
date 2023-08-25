<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  use HasFactory;

  public function getAbstract()
  {
    return substr($this->description, 0, 100) . '...';
  }
}
