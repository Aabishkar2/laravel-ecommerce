<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   protected $table = 'sub_categories';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
