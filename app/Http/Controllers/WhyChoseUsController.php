<?php

namespace App\Http\Controllers;

use App\Models\WhyChoseUs;
use Illuminate\Http\Request;

class WhyChoseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whyChoseUs = WhyChoseUs::first();

        return view('backend.content.why_chose_us.index', compact('whyChoseUs'));
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
        $chose = new WhyChoseUs();
        $chose->icon_1 = $request->icon_1;
        $chose->title_1 = $request->title_1;
        $chose->desc_1 = $request->desc_1;

        $chose->icon_2 = $request->icon_2;
        $chose->title_2 = $request->title_2;
        $chose->desc_2 = $request->desc_2;

        $chose->icon_3 = $request->icon_3;
        $chose->title_3 = $request->title_3;
        $chose->desc_3 = $request->desc_3;

        $chose->icon_4 = $request->icon_4;
        $chose->title_4 = $request->title_4;
        $chose->desc_4 = $request->desc_4;

        $chose->save();

        return redirect()->back()->with('message','Why Chose Us Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WhyChoseUs  $whyChoseUs
     * @return \Illuminate\Http\Response
     */
    public function show(WhyChoseUs $whyChoseUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhyChoseUs  $whyChoseUs
     * @return \Illuminate\Http\Response
     */
    public function edit(WhyChoseUs $whyChoseUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhyChoseUs  $whyChoseUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhyChoseUs $whyChoseUs)
    {
//        dd($request->all());

        $whyChoseUs = WhyChoseUs::first();

        $whyChoseUs->icon_1 = $request->icon_1;
        $whyChoseUs->title_1 = $request->title_1;
        $whyChoseUs->desc_1 = $request->desc_1;

        $whyChoseUs->icon_2 = $request->icon_2;
        $whyChoseUs->title_2 = $request->title_2;
        $whyChoseUs->desc_2 = $request->desc_2;

        $whyChoseUs->icon_3 = $request->icon_3;
        $whyChoseUs->title_3 = $request->title_3;
        $whyChoseUs->desc_3 = $request->desc_3;

        $whyChoseUs->icon_4 = $request->icon_4;
        $whyChoseUs->title_4 = $request->title_4;
        $whyChoseUs->desc_4 = $request->desc_4;

        $whyChoseUs->save();

        return redirect()->back()->with('message','Why Chose Us Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhyChoseUs  $whyChoseUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhyChoseUs $whyChoseUs)
    {
        //
    }
}
