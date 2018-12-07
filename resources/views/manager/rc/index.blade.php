@extends('manager.app')

@section('title', 'Reportes de los Ciudadanos')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de reportes ciudadanos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta semana
            </button>
        </div>
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    <h2>Reportes por Código Postal</h2>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="150">Código Postal</th>
                <th>Reportes</th>
                <th>Nuevos</th>
                <th>Atendiendo</th>
                <th>Resueltos</th>
                <th width="150"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($dummy as $d)
                @php
                $total = $d['count'];
                $nuevos = rand(0, $total - 5);
                $atendiendo = (rand(0, $total - $nuevos));
                $res = $total - ($nuevos + $atendiendo);
                @endphp
            <tr>
                <td>
                    <a href="{{ route('manager.rc.cp.show', $d['cp']) }}">
                        {{ $d['cp'] }}
                    </a>
                </td>
                <td>
                    {{ $total }}
                </td>
                <td>{{ $nuevos }}</td>
                <td>{{ $atendiendo }}</td>
                <td>{{ $res  }}</td>
                <td>
                    <a href="{{ route('manager.rc.cp.show', $d['cp']) }}" class="btn btn-block btn-sm btn-outline-primary">
                        Gestionar reportes
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
