@extends('layouts.app')
@section('content')
<form class="g-3" action="{{route('tickets.store')}}" method="POST">
    @csrf
    <div class="container-fluid">
        <div class="row">
                <div class="col-8">
                    <div class="row py-3 align-items-start">
                        <div class="col">
                            <h2>Ticket #</h2>
                        </div>
                        <div class="col">
                            <h2 id="ticket">000</h2>

                        </div>
                        <div class="col">
                            <h2 id="gestion">Gestión</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                            <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" required>
                        </div>
                        <div class="col-md-6">
                            <label for="apellido_cliente" class="form-label">Apellido del Cliente</label>
                            <input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente" required>
                        </div>
                        <div class="col-md-6">
                            <label for="direccion" class="form-label">Dirección del Cliente</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Telefono del Cliente</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" maxlength="11" minlength="8" required>
                        </div>
                        <div class="col-6">
                            <label for="nombre_gestion" class="form-label">Gestión Real Realizada</label>
                            <select id="nombre_gestion" name="nombre_gestion" class="form-select" required>
                              <option selected disabled>Seleccione...</option>
                              @foreach ($gestion as $gestiones)
                              <option value="{{$gestiones->id}}">{{$gestiones->nombre_gestion}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="problema_expuesto" class="form-label">Problema Expuesto por el Cliente</label>
                            <textarea class="form-control" name="problema_expuesto" id="problema_expuesto" cols="3" rows="2" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="solucion_brindada" class="form-label">Solución Brindada</label>
                            <textarea class="form-control" name="solucion_brindada" id="solucion_brindada" cols="3" rows="2" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col py-3">
                            <a role="button" href="#" id="boton" class="btn btn-primary">Atender</a>
                            <a href="" class="btn btn-primary">Actualizar</a>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No. Ticket</th>
                                <th scope="col">Gestión Solicitada</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente as $item)
                            @if ($item->atendido == 0)
                            <tr>
                                <td id="numero_ticket">{{$item->id}}</td>
                                <td id="nombre_gest">{{$item->gestiones->nombre_gestion}}</td>
                                <input type="hidden" name="id_cliente" id="id_cliente" value="{{$item->id}}">
                            </tr>
                            @endif
                            @endforeach

                        </tbody>
                      </table>
                      <div class="pt-6">
                        <button id="enviar" type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                </div>
        </div>
    </div>
</form>
<script src="{{asset('js/atender.js')}}"></script>
@endsection
