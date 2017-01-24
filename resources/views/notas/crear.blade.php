@extends('layout')

@section('content')
    <form method="post" action="{{url('notas')}}">
        {!! csrf_field() !!}
        <textarea name="nota">{{old('nota')}}</textarea>
        <button type="submit">Crear Nota</button>
    </form>
    @include('partials/errors')
@endsection