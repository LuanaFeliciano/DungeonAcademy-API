<?php

namespace App\Http\Controllers;

use App\Models\Perguntas;
use Illuminate\Http\Request;

class PerguntasController extends Controller
{
    public function get()
    {
        $perguntas = Perguntas::all();
        return response()->json($perguntas);
    }

    public function visualizarTabela() //pra visualizar na web
    {
        $perguntas = Perguntas::orderBy('sala')->get();

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
