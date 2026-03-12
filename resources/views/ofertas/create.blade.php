@extends('layouts.app')

@section('content')
    <div class="rounded-2xl bg-white p-6 shadow-sm">
        <h2 class="mb-6 text-2xl font-bold text-slate-900">Registrar Oferta</h2>

        <form action="{{ route('ofertas.store') }}" method="POST" class="space-y-4">
            @csrf
            @include('ofertas.partials.form')
        </form>
    </div>
@endsection