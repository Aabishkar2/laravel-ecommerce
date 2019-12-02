<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   protected $table = 'carts';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
