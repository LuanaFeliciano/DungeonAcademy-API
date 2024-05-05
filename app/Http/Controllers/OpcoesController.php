<?php

namespace App\Http\Controllers;

use App\Models\OpcoesResposta;
use Illuminate\Http\Request;

class OpcoesController extends Controller
{

    public function get()
    {
        $respostas = OpcoesResposta::all();
        return response()->json($respostas);
    }

    public function getByPergunta($perguntaId)
    {
        $respostas = OpcoesResposta::where('pergunta_id','=', $perguntaId)->get();
        return response()->json($respostas);
    }

    public function post(Request $request)
    {
        $request->validate([
            'pergunta_id' => 'required|integer|exists:perguntas,id',
            'descricao' => 'required|string',
            'correta' => 'required|boolean',
        ]);

        $resposta = OpcoesResposta::create($request->all());

        return response()->json($resposta, 201);
    }
}

