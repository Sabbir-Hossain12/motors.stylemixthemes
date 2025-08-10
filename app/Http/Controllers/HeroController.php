<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = Hero::first();

        return view('backend.content.heroes.index',compact('hero'));
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
        $hero = new Hero();

        $hero->title = $request->title;
        $hero->content = $request->content;

        if ($request->hasFile('bg_img')) {
            $file = $request->file('bg_img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/hero/', $filename);
            $hero->bg_img = 'public/images/hero/' .$filename;
        }

        $hero->save();

        return redirect()->back()->with('message','Hero Created Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $hero->title = $request->title;
        $hero->content = $request->content;

        if ($request->hasFile('bg_img')) {

            if ($hero->bg_img && file_exists($hero->bg_img)) {
                unlink($hero->bg_img);
            }
            $file = $request->file('bg_img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/hero/', $filename);
            $hero->bg_img = 'public/images/hero/' .$filename;
        }

        $hero->save();

        return redirect()->back()->with('message','Hero Created Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
