@extends ('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')

<p> Esta parte est en la barra lateral</p>

@endsection

@section('contenido')

<p> Este está en el body</p>

<a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-right">HISTORIA</a>
<a href="{{ url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pull-right">ECONOMÍA</a>
<a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-right">INGLÉS</a>

<a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pull-right">HISTORIA PERO UN JSON SOLO</a>



@endsection