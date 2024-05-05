<?php

namespace App\Http\Controllers;

use App\Models\Perguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerguntasController extends Controller
{
    public function get()
    {
        $perguntas = Perguntas::all();
        return response()->json($perguntas);
    }

    public function visualizarTabela()
    {
        $perguntas = Perguntas::select(
            'perguntas.*', 
            'opcoes_resposta.descricao as resposta_descricao',
            'opcoes_resposta.correta')
            ->leftJoin('opcoes_resposta', 'perguntas.id', '=', 'opcoes_resposta.pergunta_id')
            ->orderBy('perguntas.sala')
            ->get();
    
        return view('visualizarPerguntas', ['perguntas' => $perguntas]);
    }

    public function post(Request $request)
    {
        $request->validate([
            'sala' => 'required|integer',
            'tema' => 'required|string',
            'dificuldade' => 'required|integer',
            'descricao' => 'required|string',
        ]);

        $pergunta = Perguntas::create($request->all());

        return response()->json($pergunta, 201);
    }
}
