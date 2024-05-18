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

    public function getPerguntasDados(Request $request)
    {
        $params = $request->toArray();

        
        $query = Perguntas::select(
            'perguntas.sala',
            'perguntas.tema',
            'perguntas.descricao',
            'dificuldade.pontuacao',
            'dificuldade.dificuldade', 
            'opcoes_resposta.descricao as resposta_descricao',
            'opcoes_resposta.correta')
            ->leftJoin('opcoes_resposta', 'perguntas.id', '=', 'opcoes_resposta.id_pergunta')
            ->join('dificuldade', 'dificuldade.id', '=', 'perguntas.dificuldade')
            ->orderBy('perguntas.sala');

        if(isset($params['sala'])){//pesquisa pela sala
            $sala = $params['sala'];
            $query->where('perguntas.sala','=', $sala);
        }

        $perguntas = $query->get();

        return response()->json($perguntas);
    }

    public function visualizarTabela()
    {
        $perguntas = Perguntas::select(
            'perguntas.*',
            'dificuldade.*', 
            'opcoes_resposta.descricao as resposta_descricao',
            'opcoes_resposta.correta')
            ->leftJoin('opcoes_resposta', 'perguntas.id', '=', 'opcoes_resposta.id_pergunta')
            ->join('dificuldade', 'dificuldade.id', '=', 'perguntas.dificuldade')
            ->orderBy('perguntas.sala')
            ->get();
    
        return view('visualizarPerguntas', ['perguntas' => $perguntas]);
    }

    

    public function post(Request $request)
    {
        $request->validate([
            'sala' => 'required|integer',
            'tema' => 'required|string|max:100',
            'dificuldade' => 'required|exists:dificuldade,id',
            'descricao' => 'required|string',
        ]);

        $pergunta = Perguntas::create($request->all());

        return response()->json($pergunta, 201);
    }
    
}
