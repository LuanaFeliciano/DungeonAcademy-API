<?php

namespace App\Http\Controllers;

use App\Models\Dificuldade;
use Illuminate\Http\Request;

class DificuldadeController extends Controller
{

    public function get()
    {
        $dificuldades = Dificuldade::all();
        return response()->json($dificuldades);
    }

    public function post(Request $request)
    {
        $request->validate([
            'dificuldade' => 'required|string|max:100',
            'pontuacao' => 'required|integer',
        ]);

        $resposta = Dificuldade::create($request->all());

        return response()->json($resposta, 201);
    }
}

