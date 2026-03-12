<div class="grid gap-5 md:grid-cols-2">
    <div class="md:col-span-2">
        <label for="titulo" class="mb-1 block text-sm font-semibold text-slate-700">Título</label>
        <input
            type="text"
            name="titulo"
            id="titulo"
            value="{{ old('titulo', $oferta->titulo ?? '') }}"
            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-slate-500"
        >
        @error('titulo')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="vigencia" class="mb-1 block text-sm font-semibold text-slate-700">Vigencia</label>
        <input
            type="date"
            name="vigencia"
            id="vigencia"
            value="{{ old('vigencia', isset($oferta) ? $oferta->vigencia->format('Y-m-d') : '') }}"
            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-slate-500"
        >
        @error('vigencia')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="tienda" class="mb-1 block text-sm font-semibold text-slate-700">Tienda</label>
        <input
            type="text"
            name="tienda"
            id="tienda"
            value="{{ old('tienda', $oferta->tienda ?? '') }}"
            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-slate-500"
        >
        @error('tienda')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="precio_original" class="mb-1 block text-sm font-semibold text-slate-700">Precio original</label>
        <input
            type="number"
            step="0.01"
            name="precio_original"
            id="precio_original"
            value="{{ old('precio_original', $oferta->precio_original ?? '') }}"
            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-slate-500"
        >
        @error('precio_original')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="precio_descuento" class="mb-1 block text-sm font-semibold text-slate-700">Precio descuento</label>
        <input
            type="number"
            step="0.01"
            name="precio_descuento"
            id="precio_descuento"
            value="{{ old('precio_descuento', $oferta->precio_descuento ?? '') }}"
            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-slate-500"
        >
        @error('precio_descuento')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-6 flex gap-3">
    <button type="submit" class="rounded-xl bg-slate-900 px-5 py-3 font-semibold text-white hover:bg-slate-700">
        Guardar
    </button>

    <a href="{{ route('ofertas.index') }}" class="rounded-xl border border-slate-300 bg-white px-5 py-3 font-semibold text-slate-700 hover:bg-slate-50">
        Cancelar
    </a>
</div>