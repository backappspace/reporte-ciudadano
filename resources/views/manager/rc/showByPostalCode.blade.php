@extends('manager.app')

@section('title', 'Reportes de los Ciudadanos - Código Postal '.$postalCode)

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Código Postal {{ $postalCode }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta semana
            </button>
        </div>
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card">
                <img class="card-img-top" src="https://farm6.staticflickr.com/5333/17239314151_da63b06d88_o.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Categoría</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Reportes
                        <span class="badge badge-scale-zero badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Nuevos
                        <span class="badge badge-scale-two badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Atendiendo
                        <span class="badge badge-scale-three badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Resueltos
                        <span class="badge badge-scale-five badge-pill">2</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="https://farm6.staticflickr.com/5333/17239314151_da63b06d88_o.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Categoría</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Reportes
                        <span class="badge badge-scale-zero badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Nuevos
                        <span class="badge badge-scale-two badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Atendiendo
                        <span class="badge badge-scale-three badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Resueltos
                        <span class="badge badge-scale-five badge-pill">2</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="https://farm6.staticflickr.com/5333/17239314151_da63b06d88_o.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Categoría</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Reportes
                        <span class="badge badge-scale-zero badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Nuevos
                        <span class="badge badge-scale-two badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Atendiendo
                        <span class="badge badge-scale-three badge-pill">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                        Resueltos
                        <span class="badge badge-scale-five badge-pill">2</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
