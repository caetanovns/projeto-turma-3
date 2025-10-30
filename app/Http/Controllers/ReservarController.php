<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\CategoriaLivro;
use App\Models\Livro;
use App\Models\Reserva;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::with('livro', 'aluno.user', 'status')->get();
        return view('reservar.index', [
            'reservas' => $reservas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alunos = Aluno::with('user')->get();
        $livros = Livro::all();
        return view('reservar.create', [
            'alunos' => $alunos,
            'livros' => $livros,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'livro_id' => 'required|exists:livros,id',
        ]);

        $livro = Livro::find($request->livro_id);
        
        if ($livro->quantidade_disponivel < 1) {
            return redirect()->back()->withErrors(['livro_id' => 'O livro selecionado não está disponível para reserva.'])->withInput();
        }
        
        $livro->update(['quantidade_disponivel' => $livro->quantidade_disponivel - 1]);

        Reserva::create([
            'aluno_id' => $request->aluno_id,
            'livro_id' => $request->livro_id,
            'data_reserva' => Carbon::now(),
            'data_devolucao' => Carbon::now()->addDays(7),
            'reserva_status_id' => 2,
        ]);

        

        return redirect()->route('reservar.index')->with('success', 'Reserva criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
