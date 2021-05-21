@extends('layouts.app')
@section('content')
<div>
    <div class="container py-3">
        <a href="{{route('gestiones.create')}}" class="btn btn-success">Agregar Nueva Gestión</a>
    </div>
    <h2 class="text-center">Gestiones</h2>
    <div class="container">
        <div class="row g-2">
            @foreach ($gestion as $gestiones)
                    <div class="d-grid gap-2 col-4">
                        <form class="row g-3 mx-1" id="cliente" action="{{route('clientes.store')}}" method="POST" >
                            @csrf
                            <input type="hidden" name="gestion_id" value="{{$gestiones->id}}">
                            <button class="btn btn-primary " type="submit">{{$gestiones->nombre_gestion}}</button>
                        </form>
                    </div>
            @endforeach
      </div>
</div>
@endsection
