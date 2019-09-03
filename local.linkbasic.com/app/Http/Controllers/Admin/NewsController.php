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
use App\Models\Companyinfo;
use App\Models\News;

class NewsController extends Controller
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


    public function add_news(request $request, $id=null)
    {
        if ($id){
            $news= News::find($id);
        } else {
            $news = new News;
        }

        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [
                "news_topic"           => 'required',
                "news_upload"          => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('admin/addnews')->withErrors($validator)->withInput();
                               
            }
            $news->topic = $request->input('news_topic');
            $news->article = $request->input('news_upload');

            $news->save();
        }

        if($request->isMethod('GET')) {

            if($id) {
                $news = News::find($id);
            }
            return view('admin.addnews', ['news' => $news]);

        }

        return redirect()->route('admin.addnews');
        
    }

    public function company_info(Request $request)
    {
        $companyinfo = Companyinfo::find(2);

        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(), [
                "name_com"           => 'required',
                "who_ck"             => 'required',
                "profession_ck"      => 'required',
                "service_ck"         => 'required',
                "qualification_ck"   => 'required',
                "course_ck"          => 'required',
                "quality_ck"         => 'required',
                "address_com"        => 'required',
                "zipcode"            => 'required',
                "tel_america"        => 'required',
                "email_america"      => 'required',
                "tel_asia"           => 'required',
                "email_asia"         => 'required',
                "bank"               => 'required',
                "bank_address"       => 'required',
                "beneficiary"        => 'required',
                "swiftcode"          => 'required',
                "account"            => 'required',
            ]);

            if ($validator->fails()) {

                return redirect('admin/add')->withErrors($validator)->withInput();
                               
            }

            $companyinfo->name = $request->input('name_com');
            $companyinfo->who = $request->input('who_ck');
            $companyinfo->profession = $request->input('profession_ck');
            $companyinfo->service = $request->input('service_ck');
            $companyinfo->qualification = $request->input('qualification_ck');
            $companyinfo->course = $request->input('name_com');
            $companyinfo->quality = $request->input('quality_ck');
            $companyinfo->address = $request->input('address_com');
            $companyinfo->zipcode = $request->input('zipcode');
            $companyinfo->tel_america = $request->input('tel_america');
            $companyinfo->email_america = $request->input('email_america');
            $companyinfo->tel_asia = $request->input('tel_asia');
            $companyinfo->email_asia = $request->input('email_asia');
            $companyinfo->bank = $request->input('bank');
            $companyinfo->bank_address = $request->input('bank_address');
            $companyinfo->beneficiary = $request->input('beneficiary');
            $companyinfo->swiftcode = $request->input('swiftcode');
            $companyinfo->account = $request->input('account');

            $companyinfo->save();

            
        }
        return view('admin.companyinfo', ['companyinfo' => $companyinfo]);
    }
  
    public function newslist(request $request, $id=null)
    {
        
        $news = News::select('*')->paginate(5);
        return view('admin.newslist', ['news' => $news]);
    }

    public function news_delete($id)
    {

        $news = News::find($id);
        $news->delete();
        $news = News::select('*')->paginate(5);
        return redirect('admin/newslist');
        
    }
}