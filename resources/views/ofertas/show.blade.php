@extends('layouts.app')

@section('content')
    <h1>Detalle de Oferta</h1>

    <p><strong>ID:</strong> {{ $oferta->id }}</p>
    <p><strong>Título:</strong> {{ $oferta->titulo }}</p>
    <p><strong>Tienda:</strong> {{ $oferta->tienda }}</p>
    <p><strong>Vigencia:</strong> {{ $oferta->vigencia->format('d/m/Y') }}</p>
    <p><strong>Precio original:</strong> ${{ number_format($oferta->precio_original, 2) }}</p>
    <p><strong>Precio descuento:</strong> ${{ number_format($oferta->precio_descuento, 2) }}</p>

    <a href="{{ route('ofertas.edit', $oferta) }}">Editar</a>
    <a href="{{ route('ofertas.index') }}">Volver</a>
@endsection