@extends('manager.app')
 @section('title', 'Convocatorias')
 @section('breadcrumb')
 <li class="breadcrumb-item"><a href="{{ route('convocatorias.index') }}">Convocatorias</a></li>
    <li class="breadcrumb-item"><a href="#">Editar</a></li>
 @endsection
 @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar convocatoria</h1>
    </div>
    <div class="row">
        @include('manager.convocatorias.partials.fields')
    </div>
    <div class="row">
        <div class="col-md-12">
        <form action="" method="delete">
            <button type="submit" class="btn btn-danger btn-block">Eliminar convocatoria</button>
        </form>
        </div>
    </div>
 @endsection