<?php

namespace App\Http\Controllers;

use App\Models\PromoSection;
use Illuminate\Http\Request;

class PromoSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $promoSection = PromoSection::first();

        return view('backend.content.promo-section.index', compact('promoSection'));
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
        $promoSection = new PromoSection();
        $promoSection->title_1 = $request->title_1;
        $promoSection->desc_1 = $request->desc_1;
        $promoSection->icon_1 = $request->icon_1;

        $promoSection->title_2 = $request->title_2;
        $promoSection->desc_2 = $request->desc_2;
        $promoSection->icon_2 = $request->icon_2;

        if ($request->hasFile('bg_img')) {
            $file = $request->file('bg_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/images/promo-section/', $filename);
            $promoSection->bg_img = 'public/images/promo-section/'. $filename;
        }

        $promoSection->save();

        return redirect()->back()->with('message','Promo Section Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoSection  $promoSection
     * @return \Illuminate\Http\Response
     */
    public function show(PromoSection $promoSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoSection  $promoSection
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoSection $promoSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PromoSection  $promoSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PromoSection $promoSection)
    {

        $promoSection->title_1 = $request->title_1;
        $promoSection->desc_1 = $request->desc_1;
        $promoSection->icon_1 = $request->icon_1;

        $promoSection->title_2 = $request->title_2;
        $promoSection->desc_2 = $request->desc_2;
        $promoSection->icon_2 = $request->icon_2;

        if ($request->hasFile('bg_img')) {

            if ($promoSection->bg_img && file_exists($promoSection->bg_img)) {
                unlink($promoSection->bg_img);
            }

            $file = $request->file('bg_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/images/promo-section/', $filename);
            $promoSection->bg_img = 'public/images/promo-section/'. $filename;
        }

        $promoSection->save();

        return redirect()->back()->with('message','Promo Section updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoSection  $promoSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoSection $promoSection)
    {
        //
    }
}
