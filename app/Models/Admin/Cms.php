<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
   protected $table = 'cms';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
