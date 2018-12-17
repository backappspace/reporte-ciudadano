@extends('manager.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Noticias</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-outline-success" href="{{route('news.create')}}">
                Crear noticia
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card news-card my-3">
                        <img class="card-img-top" src="https://media.istockphoto.com/vectors/business-marketing-online-concept-vector-id502157614" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">¿Cuál es el mejor restaurante de Acapulco?</h5>
                          <p class="text">Te diremos los mejores restaurantes de Acapulco <a href="{{route('news.show')}}">Seguir leyendo...</a></p>
                          <p class="text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news my-3">
                    <div class="card news-card">
                        <img class="card-img-top" src="https://media.istockphoto.com/vectors/business-marketing-online-concept-vector-id502157614" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Taxi seguro</h5>
                          <p class="text">Los taxis de Acapulco son seguros <a href="{{route('news.show')}}">Seguir leyendo...</a></p>
                          <p class="text"><small class="text-muted">Last updated 20 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card news-card">
                        <img class="card-img-top" src="https://media.istockphoto.com/vectors/business-marketing-online-concept-vector-id502157614" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Calles limpias</h5>
                          <p class="text">Apartir del 2019 sera multa tirar basura en la calle <a href="{{route('news.show')}}">Seguir leyendo...</a></p>
                          <p class="text"><small class="text-muted">Last updated 1 day ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card news-card2 py-3 px-4">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 news-head">
                                <h5>Pablo Maldonado - 29 SEP 2018</h5>
                            </div>    
                            <div class="col-md-3 news-head">
                                <a class="news-option mx-2"><span data-feather="star" class="news-span"></span></a>
                                <a class="news-option mx-2"><span data-feather="trash-2" class="news-span"></span></a>
                                <a class="news-option mx-2"><span data-feather="more-vertical" class="news-span"></span></a>
                            </div>    
                            <div class="col-md-2 news-head">
                                <img class="rounded float-right rounded-circle" width="75px" height="75px" src="https://driftt.imgix.net/https%3A%2F%2Fdriftt.imgix.net%2Fhttps%253A%252F%252Fs3.amazonaws.com%252Fcustomer-api-avatars-prod%252F146841%252F3759988d3d43693a71cca132e509b8354m9uf8hprxe7%3Ffit%3Dmax%26fm%3Dpng%26h%3D200%26w%3D200%26s%3D0cc0eb4eea1d12a47153e60c1b788cd3?fit=max&fm=png&h=200&w=200&s=e97577617e44e8ab314c07ce6def4612">
                            </div>      
                        </div>
                        <h3 class="card-title">Fiesta en la playa</h3>
                        <p class="text">El día 29 se Diciembre se festejara una fiesta pre año nuevo en la playa <a href="{{route('news.show')}}">Seguir leyendo...</a></p>
                      </div>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="card news-card2 py-3 px-4">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 news-head">
                                <h5>Pablo Maldonado - 29 SEP 2018</h5>
                            </div>    
                            <div class="col-md-3 news-head">
                                <a class="news-option mx-2"><span data-feather="star" class="news-span" ></span></a>
                                <a class="news-option mx-2"><span data-feather="trash-2" class="news-span"></span></a>
                                <a class="news-option mx-2"><span data-feather="more-vertical" class="news-span"></span></a>
                            </div>    
                            <div class="col-md-2 news-head">
                                <img class="rounded float-right rounded-circle" width="75px" height="75px" src="https://driftt.imgix.net/https%3A%2F%2Fdriftt.imgix.net%2Fhttps%253A%252F%252Fs3.amazonaws.com%252Fcustomer-api-avatars-prod%252F146841%252F3759988d3d43693a71cca132e509b8354m9uf8hprxe7%3Ffit%3Dmax%26fm%3Dpng%26h%3D200%26w%3D200%26s%3D0cc0eb4eea1d12a47153e60c1b788cd3?fit=max&fm=png&h=200&w=200&s=e97577617e44e8ab314c07ce6def4612">
                            </div>      
                        </div>
                        <h3 class="card-title">No más baches</h3>
                        <p class="text">los baches de las colonias vecinas fueron reparados <a href="{{route('news.show')}}">Seguir leyendo...</a></p>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
