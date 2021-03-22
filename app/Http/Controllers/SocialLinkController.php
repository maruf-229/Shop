<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\Social_link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $social_links = DB::table('social_links')->get();
        return view('backend.social.index',compact('social_links'));
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
     * @param  \App\Models\Social_link  $social_link
     * @return \Illuminate\Http\Response
     */
    public function show(Social_link $social_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social_link  $social_link
     * @return \Illuminate\Http\Response
     */
    public function edit(Social_link $social_link,$id)
    {
        $social_link= Social_link::where('id',$id)->first();
        return view('backend.social.edit',compact('social_link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social_link  $social_link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social_link $social_link,$id)
    {
        $request->validate([
            'twitter' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);
        $social_link = Social_link::where('id',$id)->first();
        $social_link->twitter = $request-> twitter;
        $social_link->linkedin = $request-> linkedin;
        $social_link->instagram = $request-> instagram;
        $social_link->youtube = $request-> youtube;

        $social_link->save();

        return redirect()->route('admin.backend.social_link');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social_link  $social_link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social_link $social_link)
    {
        //
    }
}
