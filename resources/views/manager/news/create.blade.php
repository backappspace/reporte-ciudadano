@extends('manager.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Creando Noticia</h1>
    </div>
    <div class="container-fluid">
        <div class="col-md-12 px-5">
            <div class="row">
              

                <div class="col-md-12 p-4 create-news-container">
                  <form>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-text" >Titulo de la noticia: </span>
                         <input type="text" name="titulo" class="form-control" placeholder="Username" aria-label="Username">
                      </div>
                      <br>
                       <div class="input-group">
                        <span class="input-group-text" >Descripción: </span>
                         <input type="text" name="descripcion" class="form-control" placeholder="Username" aria-label="Username" >
                      </div>
                      <br>
                       <div class="input-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" value="Foto">
                      </div>
                      <br>
                       <div class="input-group">
                         <span class="input-group-text" >Contenido: </span>
                         <textarea class="form-control" name="contenido" aria-label="With textarea" rows="6" ></textarea>
                      </div>
                      <br>
                      <div class="input-group">
                        <button class="btn btn-outline-success left">Publicar noticia</button>
                      </div>
                    </div>
                  </form>
                </div>
          
            </div>
        </div>
    </div>
@endsection
