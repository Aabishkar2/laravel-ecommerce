<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
   protected $table = 'reviews';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
