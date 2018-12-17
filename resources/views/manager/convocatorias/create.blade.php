@extends('manager.app')
 @section('title', 'Convocatorias')
 @section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('convocatorias.index') }}">Convocatorias</a></li>
    <li class="breadcrumb-item"><a href="#">Crear nuevo</a></li>
 @endsection
 @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Nueva convocatoria</h1>
    </div>
    <div class="row">
        @include('manager.convocatorias.partials.fields')
    </div>
 @endsection