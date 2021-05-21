<?php

namespace App\Http\Controllers;

use App\Models\Gestion;
use App\Models\GestionCliente;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $gestion = Gestion::all();
        $cliente = GestionCliente::all();




        return view('tickets.index',compact('gestion','cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Ticket();
        $cliente = GestionCliente::where('atendido',false)->get()->first();
        $ticket->nombre_cliente = $request->nombre_cliente;
        $ticket->apellido_cliente = $request->apellido_cliente;
        $ticket->direccion = $request->direccion;
        $ticket->telefono = $request->telefono;
        $ticket->problema_expuesto = $request->problema_expuesto;
        $ticket->solucion_brindada = $request->solucion_brindada;
        $cliente->atendido = true;
        $cliente->update();
        $ticket->gestion_id = $request->input('nombre_gestion');
        $ticket->gestionCli_id = $request->id_cliente;
        $ticket->save();
        $cliente->save();
        return redirect(route('tickets.index'))->with('guardar','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
