<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog;
use paginate;

class Product extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';    

    public function product_save($request)
    {

        $this->name            = $request->product['name'];
        $this->model           = $request->product['model'];
        $this->category        = $request->product['category'];
        $this->html_name       = $request->product['html_name'];
        $this->page_title      = $request->product['page_title'];
        $this->search_keyword  = $request->product['keyword'];
        $this->page_desc       = $request->product['page_desc'];
        if($request->file('list_img')) {
            $this->list_img        = $request->file('list_img')->getClientOriginalName();
        }
        if($request->file('detail_img')) {
            $this->detail_img      = $request->file('detail_img')->getClientOriginalName();
        }

        $this->introduction    = $request->product['introduction'];
        $this->product_desc    = $request->input('product_desc');
        $this->technical       = $request->input('technical');
        $this->order_info      = $request->input('order_info');
        $this->featured_num    = $request->product['featured_num'];
        $this->save();

        $folder = 'uploads/images/products/'.$this->id;
        if ($request->file('list_img')) {
            //Upload Image
            $file_name = $request->file('list_img')->getClientOriginalName();
            $request->file('list_img')->move($folder, $file_name);
        }
        if ($request->file('detail_img')) {
            //Upload Image
            $file_name = $request->file('detail_img')->getClientOriginalName();
            $request->file('detail_img')->move($folder, $file_name);
        }
        $folder = 'uploads/catalogs/'.$this->id;
        if ($request->file('catalog')) {
            $catalog = new Catalog();
            

            //Upload Catalog
            $file_name = $request->file('catalog')->getClientOriginalName();
            $request->file('catalog')->move($folder, $file_name);
            //Save Iamge
            $catalog->product_id = $this->id;
            $catalog->file       = $file_name;

            $catalog->save();
        }
    }

    public function getCategory($id)
    {
        $category = Category::where('id',$id)->first();
        return $category;
    }

    static public function getProducts($parent_cat)
    {
        $products = Product::where('category', $parent_cat)->paginate(8);
        return $products;
    }
}