<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';    

    /**
     * Return tree of categories
     */
    
    public static function getSubCategories($parent_id) 
    {
        $sub_categories = Category::where('parent_id', $parent_id)->get();
        return $sub_categories;
    }

    public static function getCategory($category_id)
    {
      $parent_category = Category::where('id', $category_id)->first();
      return $parent_category;
    }
}