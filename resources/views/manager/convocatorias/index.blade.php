@extends('manager.app')
 @section('title', 'Convocatorias')
 @push('css')
    <style>
        .card {
            cursor:pointer;
            padding: 5px; 
            margin-top: 10px;
            color: black;
        }
        .card:hover {
            filter:brightness(0.95);
        }
        a:link { 
            text-decoration:none; 
        }
    </style>
 @endpush
 @section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Convocatorias</a></li>
 @endsection
 @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Convocatorias</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta semana
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="{{ route('convocatorias.create') }}" class="btn btn-primary">Agregar convocatoria</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('convocatorias.show',1) }}">
                <span  class="card">
                    <img class="card-img-top" src="https://farm6.staticflickr.com/5333/17239314151_da63b06d88_o.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Título de la convocatoria</h5>
                        <p class="card-text"><small><b>Categoría.</b></small></p>
                        <p class="card-text">Descripción.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <form action="{{ route('convocatorias.edit',1) }}" method="put">
                            <button type="submit" class="btn btn-info btn-block">Editar</button>
                        </form>
                    </div>
                </span >
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('convocatorias.show',1) }}">
                <span  class="card">
                    <img class="card-img-top" src="https://farm6.staticflickr.com/5333/17239314151_da63b06d88_o.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Título de la convocatoria</h5>
                        <p class="card-text"><small><b>Categoría.</b></small></p>
                        <p class="card-text">Descripción.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <form action="{{ route('convocatorias.edit',1) }}" method="put">
                            <button type="submit" class="btn btn-info btn-block">Editar</button>
                        </form>
                    </div>
                </span >
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('convocatorias.show',1) }}">
                <span  class="card">
                    <img class="card-img-top" src="https://farm6.staticflickr.com/5333/17239314151_da63b06d88_o.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Título de la convocatoria</h5>
                        <p class="card-text"><small><b>Categoría.</b></small></p>
                        <p class="card-text">Descripción.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <form action="{{ route('convocatorias.edit',1) }}" method="put">
                            <button type="submit" class="btn btn-info btn-block">Editar</button>
                        </form>
                    </div>
                </span >
            </a>
        </div>
    </div>
 @endsection