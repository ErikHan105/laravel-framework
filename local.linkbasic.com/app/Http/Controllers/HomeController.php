<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use Storage;
use Response;
use Paginate;
use App\Models\Category;
use App\Models\Product;
use App\Models\Catalog;
use App\Models\Companyinfo;
use App\Models\News;
use App\Models\SlideImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        $news = News::select('*')->orderby('created_at', 'DESC')->paginate(3);
        $slides = SlideImage::select('*')->where('flag', 1)->orderby('created_at', 'DESC')->paginate(4);
        $products = Product::select('*')->orderby('featured_num', 'ASC')->orderby('name', 'asc')->paginate(6);
        return view('pages.home', ['products' => $products, 'news' => $news, 'slides' => $slides]);
    }

    public function products(request $request)
    {
        // $category_products = Category::where('parent_id', 1)->paginate(6);
        $products = $products = Product::where('category', 1)->paginate(6);
        $categories = Category::All();
        if ($request->input('category_id')) {
            // $parent_category = Category::where('id', $request->input('category_id'))->first();
            // if($parent_category->parent_id == 0) {
            //     $category_products = Category::where('parent_id', $request->input('category_id'))->paginate(6);

            // } else {
            //     $products = Product::where('category', $request->input('category_id'))->paginate(6);
            //     return view('pages.products', ['categories' => $categories, 'products' => $products]);
            // }
            $products = Product::where('category', $request->input('category_id'))->paginate(6);
            return view('pages.products', ['categories' => $categories, 'products' => $products]);
        }
        
        
        
        return view('pages.products', ['categories' => $categories, 'products' => $products]);
    }

    public function product_detail($id)
    {   
        $product = Product::find($id);
        $categories = Category::All();
        $catalog = Product::join('catalogs', 'catalogs.product_id', '=', 'products.id')
                          ->addSelect('catalogs.file as catalog_url')
                          ->first();
        return view('pages.product_detail', ['categories' => $categories, 'product' => $product, 'catalog' => $catalog]);
    }

    public function news()
    {
        $news = News::select('*')->paginate(10);
        return view('pages.news', ['news'=> $news]);
    }

    public function news_detail($id)
    {
        $news = News::find($id);
        return view('pages.news_detail', ['news'=> $news]);
    }

    public function about()
    {
        $companyinfo = Companyinfo::find(2);
        return view('pages.aboutus', ['companyinfo' => $companyinfo]);
    }

    public function support()
    {
        $user = Auth::User();
        return view('pages.support', ['user' => $user]);
    }

    public function custom()
    {
        $catalogs = Catalog::select('*')->paginate(20);
        return view('pages.custom', ['catalogs' => $catalogs]);
    }

    public function contact()
    {
        $companyinfo = Companyinfo::find(2);
        return view('pages.contact', ['companyinfo' => $companyinfo]);
    }

    public function download($id)
    {
        $product = Product::find($id);
        $catalog = Product::join('catalogs', 'catalogs.product_id', '=', 'products.id')
                          ->addSelect('catalogs.file as catalog_url')
                          ->first();
        
        $file_path = public_path().'/uploads/catalogs/' . $id . '/' . $catalog->catalog_url;
        $header = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file_path, $product['name'], $header);
    }
}
