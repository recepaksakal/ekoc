<?php

namespace App\Http\Controllers;

use App\Models\Riders;
use Illuminate\Http\Request;

class RidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riders = Riders::get();
        //dd($riders);
        return  view('riders', ["riders" => $riders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('create_profile', ["rider" => Riders::findOrFail(1)]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Riders  $riders
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('profile', ["rider" => Riders::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Riders  $riders
     * @return \Illuminate\Http\Response
     */
    public function edit(Riders $riders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Riders  $riders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riders $riders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Riders  $riders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riders $riders)
    {
        //
    }
}
