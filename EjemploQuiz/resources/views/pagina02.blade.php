@extends ('layouts.ejemplolayout')

@section('titulo', 'Página 02 del proyecto')

@section('barralateral')
    @parent
    <p> Esta parte es de la pagina 02</p>

@endsection

@section('contenido')

    <h3>El tema elegido es {{ $tema }}</h3>

    <a href="{{url('/')}}" class="btn btn-xs btn-info pull-right">pagina 01</a>
@endsection