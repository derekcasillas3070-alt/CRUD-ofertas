@extends('layouts.app')

@section('content')
    <h1>Registrar Oferta</h1>

    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
        @include('ofertas.partials.form')
    </form>

    <a href="{{ route('ofertas.index') }}">Volver</a>
@endsection