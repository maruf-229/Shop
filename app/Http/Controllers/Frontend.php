<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\Logo;
use App\Models\Product;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function index(){
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        return view('frontend.dashboard', compact('banners','logos' ,'contact_infos'));
    }

    public function category(){
        $categories=Category::orderBy('id','desc')->get();
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        return view('frontend.category', compact('banners','logos' ,'contact_infos'))->with('categories',$categories);
    }
    public function product($id){
        //dd($id);
        $category = Category::find($id);
        $products=$category->products;
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        return view('frontend.product',compact('banners','logos','contact_infos'))->with('products',$products);
    }
    public function productShow($id)
    {
        $product=Product::find($id);
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        return view('frontend.show',compact('product','banners','logos','contact_infos'));
    }
}
