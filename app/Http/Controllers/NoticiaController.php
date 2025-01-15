<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('noticias.index', [
            'noticias' => Noticia::orderBy('meneos', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('noticias.create', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required',
            'url' => 'required|string',
            'categoria_id' => 'required|integer|exists:categorias,id'
        ]);

        $validated['user_id'] = Auth::id();

        $noticia = Noticia::create($validated);
        session()->flash('exito', 'Noticia creada correctamente.');
        return redirect()->route('noticias.show', $noticia);
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        return view('noticias.show', [
            'noticia' => $noticia,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        return view('noticias.edit',[
            'noticia' => $noticia,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required',
            'url' => 'required|string',
            'categoria_id' => 'required|integer|exists:categorias,id'
        ]);

        $noticia->fill($validated);
        $noticia->save();
        session()->flash('exito', 'Noticia modificada correctamente.');
        return redirect()->route('noticias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index');
    }

    public function menear(Noticia $noticia)
    {
        if (isset($noticia)) {
            $noticia->meneos++;
            $noticia->save();
            return redirect()->route('noticias.index');

        }
    }
}
