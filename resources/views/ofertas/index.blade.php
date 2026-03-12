@extends('layouts.app')

@section('content')
    <div class="rounded-2xl bg-white p-6 shadow-sm">
        <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Listado de Ofertas</h2>
                <p class="text-sm text-slate-500">Consulta, registra, edita y elimina ofertas.</p>
            </div>

            <a href="{{ route('ofertas.create') }}"
               class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-3 font-semibold text-white hover:bg-slate-700">
                Nueva oferta
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full overflow-hidden rounded-xl border border-slate-200">
                <thead class="bg-slate-100 text-left text-sm text-slate-700">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Título</th>
                        <th class="px-4 py-3">Tienda</th>
                        <th class="px-4 py-3">Vigencia</th>
                        <th class="px-4 py-3">Original</th>
                        <th class="px-4 py-3">Descuento</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 bg-white text-sm">
                    @forelse($ofertas as $oferta)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3">{{ $oferta->id }}</td>
                            <td class="px-4 py-3 font-medium">{{ $oferta->titulo }}</td>
                            <td class="px-4 py-3">{{ $oferta->tienda }}</td>
                            <td class="px-4 py-3">{{ $oferta->vigencia->format('d/m/Y') }}</td>
                            <td class="px-4 py-3">${{ number_format($oferta->precio_original, 2) }}</td>
                            <td class="px-4 py-3 font-semibold text-emerald-700">${{ number_format($oferta->precio_descuento, 2) }}</td>
                            <td class="px-4 py-3">
                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('ofertas.show', $oferta) }}"
                                       class="rounded-lg bg-blue-100 px-3 py-2 text-blue-700 hover:bg-blue-200">
                                        Ver
                                    </a>

                                    <a href="{{ route('ofertas.edit', $oferta) }}"
                                       class="rounded-lg bg-amber-100 px-3 py-2 text-amber-700 hover:bg-amber-200">
                                        Editar
                                    </a>

                                    <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            onclick="return confirm('¿Eliminar oferta?')"
                                            class="rounded-lg bg-red-100 px-3 py-2 text-red-700 hover:bg-red-200"
                                        >
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-6 text-center text-slate-500">
                                No hay ofertas registradas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $ofertas->links() }}
        </div>
    </div>
@endsection