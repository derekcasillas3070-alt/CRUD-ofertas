@extends('layouts.app')

@section('content')
    <div class="rounded-2xl bg-white p-6 shadow-sm">
        <div class="mb-6 flex items-center justify-between">
            <h2 class="text-2xl font-bold text-slate-900">Detalle de Oferta</h2>
            <a href="{{ route('ofertas.index') }}"
               class="rounded-xl border border-slate-300 bg-white px-4 py-2 font-semibold text-slate-700 hover:bg-slate-50">
                Volver
            </a>
        </div>

        <div class="grid gap-4 md:grid-cols-2">
            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-sm text-slate-500">ID</p>
                <p class="font-semibold">{{ $oferta->id }}</p>
            </div>

            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Título</p>
                <p class="font-semibold">{{ $oferta->titulo }}</p>
            </div>

            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Tienda</p>
                <p class="font-semibold">{{ $oferta->tienda }}</p>
            </div>

            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Vigencia</p>
                <p class="font-semibold">{{ $oferta->vigencia->format('d/m/Y') }}</p>
            </div>

            <div class="rounded-xl bg-slate-50 p-4">
                <p class="text-sm text-slate-500">Precio original</p>
                <p class="font-semibold">${{ number_format($oferta->precio_original, 2) }}</p>
            </div>

            <div class="rounded-xl bg-emerald-50 p-4">
                <p class="text-sm text-emerald-600">Precio descuento</p>
                <p class="font-semibold text-emerald-700">${{ number_format($oferta->precio_descuento, 2) }}</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('ofertas.edit', $oferta) }}"
               class="rounded-xl bg-slate-900 px-5 py-3 font-semibold text-white hover:bg-slate-700">
                Editar
            </a>
        </div>
    </div>
@endsection