<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $privacy_policies = DB::table('privacy_policies')->get();
        return view('backend.privacy.index',compact('privacy_policies'));
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
     * @param  \App\Models\PrivacyPolicy  $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function show(PrivacyPolicy $privacyPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrivacyPolicy  $privacyPolicy
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(PrivacyPolicy $privacyPolicy,$id)
    {
        $privacy_policy= PrivacyPolicy::where('id',$id)->first();
        return view('backend.privacy.edit',compact('privacy_policy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrivacyPolicy  $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrivacyPolicy $privacyPolicy,$id)
    {
        $request->validate([
            'description' => 'required',
        ]);
        $privacy_policy = PrivacyPolicy::where('id',$id)->first();
        $privacy_policy->description = $request-> description;

        $privacy_policy->save();

        return redirect()->route('admin.backend.privacy_policy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrivacyPolicy  $privacyPolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrivacyPolicy $privacyPolicy)
    {
        //
    }
}
