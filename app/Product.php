<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table= 'products';

  protected $fillable= ['name', 'quantity', 'price', 'color', 'created_at', 'updated_at'];

  protected $primaryKey= 'id';

  protected $keyType= 'string';

  public $incrementing= false;
}