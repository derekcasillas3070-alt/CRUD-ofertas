<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfertaRequest;
use App\Http\Requests\UpdateOfertaRequest;
use App\Models\Oferta;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OfertaController extends Controller
{
    public function index(): View
    {
        $ofertas = Oferta::latest()->paginate(10);

        return view('ofertas.index', compact('ofertas'));
    }

    public function create(): View
    {
        return view('ofertas.create');
    }

    public function store(StoreOfertaRequest $request): RedirectResponse
    {
        Oferta::create($request->validated());

        return redirect()
            ->route('ofertas.index')
            ->with('success', 'Oferta registrada correctamente.');
    }

    public function show(Oferta $oferta): View
    {
        return view('ofertas.show', compact('oferta'));
    }

    public function edit(Oferta $oferta): View
    {
        return view('ofertas.edit', compact('oferta'));
    }

    public function update(UpdateOfertaRequest $request, Oferta $oferta): RedirectResponse
    {
        $oferta->update($request->validated());

        return redirect()
            ->route('ofertas.index')
            ->with('success', 'Oferta actualizada correctamente.');
    }

    public function destroy(Oferta $oferta): RedirectResponse
    {
        $oferta->delete();

        return redirect()
            ->route('ofertas.index')
            ->with('success', 'Oferta eliminada correctamente.');
    }
}