<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class SubCategory extends Model
{
   protected $table = 'sub_categories';
   public $timestamps = true;
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';

   public static function hasSubCategory($category_id) {
      $sub_category = DB::table('sub_categories')->where('status','1')->where('category_id',$category_id)->get();
      if($sub_category) {
         return $sub_category;
      } else {
         return false;
      }
   }
}
