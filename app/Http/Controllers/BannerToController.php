<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerTo;
use App\Models\Logo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class BannerToController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $banner_tos = DB::table('banner_tos')->get();
        return view('backend.banner_to.index',compact('banner_tos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerTo  $bannerTo
     * @return \Illuminate\Http\Response
     */
    public function show(BannerTo $bannerTo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerTo  $bannerTo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(BannerTo $bannerTo,$id)
    {
        $banner_to = BannerTo::where('id',$id)->first();
        return view('backend.banner_to.edit' , compact('banner_to'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerTo  $bannerTo
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, BannerTo $bannerTo,$id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
        ]);

        $banner_to = BannerTo::find($id);
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

            $banner_to->image    = $image_name;
        }
        $banner_to->save();
        return redirect()->route('admin.backend.banner_to');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerTo  $bannerTo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerTo $bannerTo)
    {
        //
    }
}
