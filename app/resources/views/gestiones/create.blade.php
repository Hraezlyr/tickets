@extends('layouts.app')
@section('content')
<div class="container">


<form action="{{route('gestiones.store')}}" method="POST">
    @csrf

    <input type="hidden" name="user_id" value="{{$user}}">
    <div class="row mb-3">
      <label for="nombre_gestion" class="col-sm-2 col-form-label">Nombre de la Gestión</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="nombre_gestion" name="nombre_gestion" required>
      </div>
    </div>
    <fieldset class="row mb-3">
      <legend class="col-form-label col-sm-2 pt-0">Aplica Visita Técnica</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="visita_tecnica" id="visita_tecnica" value="1">
          <label class="form-check-label" for="visita_tecnica">
            Si
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="visita_tecnica" id="visita_tecnica" value="0" checked>
          <label class="form-check-label" for="visita_tecnica">
            No
          </label>
        </div>
      </div>
    </fieldset>
    <div class="row mb-3">
        <label for="fecha_creacion" class="col-sm-2 col-form-label">Fecha de Creación</label>
        <div class="col-md-6">
          <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" required>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{route('gestiones.index')}}" class="btn btn-danger">Cancelar</a>
  </form>
</div>
@endsection
