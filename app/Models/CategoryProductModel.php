<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProductModel extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'category_name', 'slug_category_product','category_desc','category_status','category_parent',
    ];
    protected $primaryKey = 'category_id';
 	protected $table = 'tbl_category_product';

    //  public static function recursive($categories, $parents =0, $level = 1, $listCategory)
    //  {
    //      if (count($categories) > 0) {
    //          foreach($categories as $key => $value){
    //              if ($value->category_parent == $parents ) {
    //                  $value->level = $level;

    //                  $listCategory[] = $value;

    //                  unset($categories[$key]);

    //                  $parent = $value->category_id;

    //                  self::recursive($categories, $parent, $level=1, $listCategory);
    //              }
    //          }
    //      }
    //  }
    public function product(){
        return $this->hasMany('App\Models\Product');
    }
}
