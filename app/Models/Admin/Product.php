<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'products';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
