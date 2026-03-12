<div>
    <label for="titulo">Título</label>
    <input
        type="text"
        name="titulo"
        id="titulo"
        value="{{ old('titulo', $oferta->titulo ?? '') }}"
    >
    @error('titulo')
        <div>{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="vigencia">Vigencia</label>
    <input
        type="date"
        name="vigencia"
        id="vigencia"
        value="{{ old('vigencia', isset($oferta) ? $oferta->vigencia->format('Y-m-d') : '') }}"
    >
    @error('vigencia')
        <div>{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="tienda">Tienda</label>
    <input
        type="text"
        name="tienda"
        id="tienda"
        value="{{ old('tienda', $oferta->tienda ?? '') }}"
    >
    @error('tienda')
        <div>{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="precio_original">Precio original</label>
    <input
        type="number"
        step="0.01"
        name="precio_original"
        id="precio_original"
        value="{{ old('precio_original', $oferta->precio_original ?? '') }}"
    >
    @error('precio_original')
        <div>{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="precio_descuento">Precio descuento</label>
    <input
        type="number"
        step="0.01"
        name="precio_descuento"
        id="precio_descuento"
        value="{{ old('precio_descuento', $oferta->precio_descuento ?? '') }}"
    >
    @error('precio_descuento')
        <div>{{ $message }}</div>
    @enderror
</div>

<div>
    <button type="submit">Guardar</button>
</div>