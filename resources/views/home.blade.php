@extends('layouts.app_material_design')

{{--En esta seccion incluyo el titulo de pagina en que se encuentra --}}
@section('titulo')
   DASHBOARD
@stop

{{--En esta seccion incluyo el buscador --}}
@section('call_search')
    
@stop
{{--En esta seccion incluyo el icono de busqueda --}}
@section('buscar')
    
@stop

{{--En esta seccion incluyo el contenido mayoritario de la pagina --}}
@section('content')
    <div class="card">
        <div class="header">
            <h2>
                LISTA DE USUARIOS
                <small>Para realizar alguna busqueda,ir al icono <i class="fa fa-search" aria-hidden="true"></i> </small>
            </h2>
        </div>
        </div>
    </div>
@endsection
