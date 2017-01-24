@extends('layout')

@section('content')
    <ul class="links">
        @foreach($notas as $nota)
            <li>
                {{$nota->nota}}
            </li>
        @endforeach
    </ul>
    <a class="btn btn-default" href="{{url('notas/crear')}}">Crear nueva nota</a>
    {!! $notas->render() !!}
@endsection
