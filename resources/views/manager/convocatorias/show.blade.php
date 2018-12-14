@extends('manager.app')
 @section('title', 'Convocatorias')
 @section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('convocatorias.index') }}">Convocatorias</a></li>
    <li class="breadcrumb-item"><a href="#">Detalle</a></li>
 @endsection
 @section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detalles de la convocatoria</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="email" class="form-control" id="titulo" value="udsbsf skufghskdfb sukhfkusd" readonly>
            </div>
            <div class="form-group">
                <label for="categoria_id">Categoría</label>
                <select class="form-control" id="categoria_id" disabled readonly>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" rows="3" readonly>
                xcvxcv asdnuasd asudhalsd
                </textarea>
            </div>
            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea class="form-control" id="contenido" rows="3" readonly>
                xcvxcvb sdfns asudhalsda kuwqheqw
                </textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="margin-top:50px">
                <img class="card-img-top" src="https://farm6.staticflickr.com/5333/17239314151_da63b06d88_o.jpg" alt="Card image cap">
            </div>
        </div>
    </div>
 @endsection