<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\Logo;
use App\Models\PaymentMethod;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\Social_link;
use App\Models\Term;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function index(){
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        $social_links= Social_link::all();
        $payment_methods= PaymentMethod::all();
        $privacy_policies=PrivacyPolicy::all();
        $terms=Term::all();
        return view('frontend.dashboard', compact('banners','logos' ,'contact_infos','social_links','payment_methods','privacy_policies','terms'));
    }

    public function category(){
        $categories=Category::orderBy('id','desc')->get();
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        $social_links= Social_link::all();
        $payment_methods= PaymentMethod::all();
        $privacy_policies=PrivacyPolicy::all();
        $terms=Term::all();
        return view('frontend.category', compact('banners','logos' ,'contact_infos','social_links','categories','payment_methods','privacy_policies','terms'));
    }
    public function product($id){
        //dd($id);
        $category = Category::find($id);
        $products=$category->products;
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        $social_links= Social_link::all();
        $payment_methods= PaymentMethod::all();
        $privacy_policies=PrivacyPolicy::all();
        $terms=Term::all();
        return view('frontend.product',compact('banners','logos','contact_infos','social_links','payment_methods','privacy_policies','terms'))->with('products',$products);
    }
    public function productShow($id)
    {
        $product=Product::find($id);
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        $social_links= Social_link::all();
        $payment_methods= PaymentMethod::all();
        $privacy_policies=PrivacyPolicy::all();
        $terms=Term::all();
        return view('frontend.show',compact('product','banners','logos','contact_infos','social_links','payment_methods','privacy_policies','terms'));
    }
    public function privacy(){
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        $social_links= Social_link::all();
        $payment_methods= PaymentMethod::all();
        $privacy_policies=PrivacyPolicy::all();
        $terms=Term::all();
        return view('frontend.privacy',compact('banners','logos' ,'contact_infos','social_links','payment_methods','privacy_policies','terms'));
    }
    public function terms(){
        $banners = Banner::all();
        $logos = Logo::all();
        $contact_infos = ContactInfo::all();
        $social_links= Social_link::all();
        $payment_methods= PaymentMethod::all();
        $privacy_policies=PrivacyPolicy::all();
        $terms=Term::all();
        return view('frontend.terms',compact('banners','logos' ,'contact_infos','social_links','payment_methods','privacy_policies','terms'));
    }
}
