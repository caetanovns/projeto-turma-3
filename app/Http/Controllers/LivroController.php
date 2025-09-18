<?php

namespace App\Http\Controllers;

use App\Models\CategoriaLivro;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('livro.index', [
            'livros' => Livro::all()->load('categoriaLivro')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = CategoriaLivro::all();

        return view('livro.create',[
            'categorias' => $categorias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $livro = new Livro();
        $livro->titulo = $request->titulo;
        $livro->resumo = $request->resumo;
        $livro->autor = $request->autor;
        $livro->numero_paginas = $request->numero_paginas;
        $livro->ano_publicacao = $request->ano_publicacao;
        $livro->quantidade_total = $request->quantidade_total;
        $livro->quantidade_disponivel = $request->quantidade_total;
        $livro->categoria_livro_id = $request->categoria_livro_id;

        $livro->save();
        return redirect()->route('livro.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('livro.edit', [
            'livro' => Livro::findOrFail($id),
            'categorias' => CategoriaLivro::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        $livro->titulo = $request->titulo;
        $livro->resumo = $request->resumo;
        $livro->autor = $request->autor;
        $livro->numero_paginas = $request->numero_paginas;
        $livro->ano_publicacao = $request->ano_publicacao;
        $livro->quantidade_total = $request->quantidade_total;
        $livro->quantidade_disponivel = $request->quantidade_disponivel;
        $livro->categoria_livro_id = $request->categoria_livro_id;
        $livro->save();
        return redirect()->route('livro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro) {
        $livro->delete();
        return redirect()->route('livro.index');
    }
}
