<?php

namespace App\Http\Controllers;

use App\Models\Gestion;
use App\Models\GestionCliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GestionClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new GestionCliente();
        $cliente->atendido = false;
        $cliente->fecha_creacion = Carbon::now();
        $cliente->gestion_id = $request->input('gestion_id');
        $cliente->save();
        return redirect(route('gestiones.index'))->with('añadido','ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GestionCliente  $gestionCliente
     * @return \Illuminate\Http\Response
     */
    public function show(GestionCliente $gestionCliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GestionCliente  $gestionCliente
     * @return \Illuminate\Http\Response
     */
    public function edit(GestionCliente $gestionCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GestionCliente  $gestionCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GestionCliente $gestionCliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GestionCliente  $gestionCliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(GestionCliente $gestionCliente)
    {
        //
    }
}
