@extends('layouts.app')

@section('content')
    <h1>Listado de Ofertas</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('ofertas.create') }}">Nueva oferta</a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Tienda</th>
                <th>Vigencia</th>
                <th>Precio original</th>
                <th>Precio descuento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ofertas as $oferta)
                <tr>
                    <td>{{ $oferta->id }}</td>
                    <td>{{ $oferta->titulo }}</td>
                    <td>{{ $oferta->tienda }}</td>
                    <td>{{ $oferta->vigencia->format('d/m/Y') }}</td>
                    <td>${{ number_format($oferta->precio_original, 2) }}</td>
                    <td>${{ number_format($oferta->precio_descuento, 2) }}</td>
                    <td>
                        <a href="{{ route('ofertas.show', $oferta) }}">Ver</a>
                        <a href="{{ route('ofertas.edit', $oferta) }}">Editar</a>

                        <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Eliminar oferta?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No hay ofertas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $ofertas->links() }}
@endsection