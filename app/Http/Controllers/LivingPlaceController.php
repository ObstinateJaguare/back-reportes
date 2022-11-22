<?php

namespace App\Http\Controllers;

use App\Models\LivingPlace;
use Illuminate\Http\Request;
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
      return "Hola mundo";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLivingPlaceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,LivingPlace $livingPlace)
    {
        try {
            $livingPlace->direccion = $request->direccion;
            $livingPlace->barrio = $request->barrio;
            $livingPlace->tipo = $request->tipoVivienda;
            $livingPlace->descripcion = $request->descripcion;
            $livingPlace->propietario = '1';


            if($livingPlace->save())
            {

                return response()->json([
                    "message"=>"Succees",
                    "status"=>200,
                    "data"=>$livingPlace
                ],200);
            }else {
                return response()->json([
                    "message"=>"Error",
                    "status"=>201
                ],201);
            }

        } catch (\Throwable $th) {
            throw $th;
        }



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
