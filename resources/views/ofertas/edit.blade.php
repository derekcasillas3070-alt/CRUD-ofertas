@extends('layouts.app')

@section('content')
    <h1>Editar Oferta</h1>

    <form action="{{ route('ofertas.update', $oferta) }}" method="POST">
        @csrf
        @method('PUT')
        @include('ofertas.partials.form')
    </form>

    <a href="{{ route('ofertas.index') }}">Volver</a>
@endsection