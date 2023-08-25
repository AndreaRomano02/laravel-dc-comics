<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  use HasFactory;
  protected $fillable = ['title', 'description', 'thumb', 'price', 'sale_date', 'series', 'type', 'artists', 'writers'];

  public function getAbstract()
  {
    return substr($this->description, 0, 100) . '...';
  }
}
