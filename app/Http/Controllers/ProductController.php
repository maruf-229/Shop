<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
//use App\Models\ProductImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return view('backend.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required|exists:categories,id',
        ]);


        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category;

        if($request->hasFile('image')){
            $image              = $request->file('image');
            $OriginalExtension  = $image->getClientOriginalExtension();
            $image_name         = Carbon::now()->format('d-m-Y H-i-s') .'.'. $OriginalExtension;
            $destinationPath    = 'img';
            $resize_image       =Image::make($image->getRealPath());
            $resize_image->resize(500, 500, function($constraint){
                $constraint->aspectRatio();
            });
            $resize_image->save($destinationPath . '/' . $image_name);

            $product->image    = $image_name;
        }
        $product->save();

//        if (count($request->product_image) > 0) {
//
//            foreach ($request->product_image as $image) {
//                $img = time() . '.' . $image->getClientOriginalExtension();
//                $location = public_path('img/' . $img);
//                Image::make($image)->save($location);
//
//                $product_image = new ProductImage;
//                $product_image->product_id = $product->id;
//                $product_image->image = $img;
//                $product_image->save();
//            }
//        }
      return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id',$id)->find($id);
        return view('backend.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);


        $product = Product::where('id',$id)->first();

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;


        $product->save();

        if ($request->product_image) {

//            foreach ($request->product_image as $image) {
            $image = $request->product_image;
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/' . $img);
                Image::make($image)->save($location);
                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();
//            }
        }

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->first();

        if($product !=null) {
            $product->delete();
        }

        session()->flash('success','Product has deleted successfully !!');
        return back();
    }
    public function getProducts(Request $request){
        $search = $request->search;

        if($search==''){
            $products=Product::orderBy("title","asc")
                ->select("id","title")
                ->limit(5)
                ->get();
        }
        else{
            $products=Product::orderBy("title","asc")
                ->select("id","title")
                ->where("title","like","%".$search."%")
                ->limit(5)
                ->get();
        }
        $response=array();
        foreach ($products as $product){
            $response[]=array(
                "value"=>$product->id,
                "label"=>$product->title
            );
        }
        return response()->json($response);
    }
}
