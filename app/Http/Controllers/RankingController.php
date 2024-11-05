<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function post(Request $request)
    {   
        // Valida os dados recebidos
        $request->validate([
            'nome' => 'required|string|max:255',
            'genero' => 'required|string|max:1',
            'pontuacao' => 'required|integer',
        ]);

        // Cria um novo registro no ranking
        $ranking = new Ranking();
        $ranking->nome = $request->nome;
        $ranking->pontuacao = $request->pontuacao;
        $ranking->genero = $request->genero;
        $ranking->save();

        // Retorna uma resposta
        return response()->json(['message' => 'Pontuação registrada com sucesso!'], 201);
    }

    public function get()
    {
        //$data = today();->whereDate("created_at", $data)
        $ranking = Ranking::orderBy('pontuacao', 'desc')->get();
        return view('ranking', compact('ranking'));
    }
}
