<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Log;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Catalog;
use App\Models\SlideImage;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function add(Request $request, $id=null)
    {
        if ($id){
            $product= Product::find($id);
        } else {
            $product = new Product;
        }

        // $product = null;

        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                "product.name"           => 'required',
                "product.model"          => 'required',
                "product.category"       => 'required',
                "product.html_name"      => 'required',
                "product.page_title"     => 'required',
                "product.keyword"        => 'required',
                "product.page_desc"      => 'required',
                "list_img"               => 'required_unless:id,'.$id,
                "detail_img"             => 'required_unless:id,'.$id,
                "product.introduction"   => 'required',
                "product_desc"           => 'required',
                "technical"              => 'required',
                "order_info"             => 'required',
                "product.featured_num"   => 'required'
            ]);

            if ($validator->fails()) {

                return redirect('admin/add')->withErrors($validator)->withInput();
                               
            }

            $product->product_save($request);
        }

        if($request->isMethod('GET')) {
            $product = null;
            if($id) {
                $product = Product::find($id);
            }
            return view('admin.addproduct', ['categories' => Category::All(), 'product' => $product]);
            // return view('admin.new', ['user' => $user, 'categories' => Category::getTreeCategories(0, $id), 'product' => $product]);
        }

        return redirect()->route('admin.add');
    
    }

    public function productlist(request $request, $id=null)
    {
        $products = Product::select('*')->paginate(5);
        return view('admin.productlist', ['products' => $products]);
    }

    public function slide_image(request $request)
    {
        if($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                "slide" => 'required',                
            ]);
            if ($validator->fails()) {
                return redirect('admin/slideimage')->withErrors($validator)->withInput();
            }

            $folder = 'uploads/images/slide';
            if ($request->file('slide')) {
                //Upload Image
                $file_name = $request->file('slide')->getClientOriginalName();
                $slide = new SlideImage;
                $slide->file = $file_name;
                $slide->save();
                $request->file('slide')->move($folder, $file_name);
            }

            

            return redirect()->route('home');
        }
        return view('admin.slideimage');
    }

    public function product_delete($id)
    {
        $product = Product::find($id);
        $catalog = Catalog::where('product_id', $id)->first();
        if($catalog){
            $catalog->delete();
        }
        $product->delete();
        $products = Product::select('*')->paginate(5);
        return redirect('admin/productlist');
        
    }
}