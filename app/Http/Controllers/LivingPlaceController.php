<?php

namespace App\Http\Controllers;

use App\Models\LivingPlace;
use App\Http\Requests\StoreLivingPlaceRequest;
use App\Http\Requests\UpdateLivingPlaceRequest;

class LivingPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLivingPlaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLivingPlaceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivingPlace  $livingPlace
     * @return \Illuminate\Http\Response
     */
    public function show(LivingPlace $livingPlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivingPlace  $livingPlace
     * @return \Illuminate\Http\Response
     */
    public function edit(LivingPlace $livingPlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLivingPlaceRequest  $request
     * @param  \App\Models\LivingPlace  $livingPlace
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLivingPlaceRequest $request, LivingPlace $livingPlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivingPlace  $livingPlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivingPlace $livingPlace)
    {
        //
    }
}
