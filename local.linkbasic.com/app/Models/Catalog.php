<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Catalog extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'catalogs';    

    public function getProductName($id) 
    {
    	$product = Product::find($id);
    	return $product;
    }
}