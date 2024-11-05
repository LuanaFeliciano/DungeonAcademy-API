<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">

        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logo do Jogo" class="w-50 h-50">
        </div>
        

        <h1 class="text-center text-5xl font-bold mb-8">Ranking dos Jogadores</h1>
        
        <div class="mt-8 bg-gray-800 p-6 rounded-lg shadow-lg">
            <table class="w-full table-auto text-left">
                <thead>
                    <tr class="text-blue-200 border-b-2 border-blue-500">
                        <th class="py-3 text-2xl text-center">Posição</th>
                        <th class="py-3 text-2xl text-center">Jogador</th>
                        <th class="py-3 text-2xl text-center">Pontuação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ranking as $key => $player)
                    <tr class="hover:bg-gray-700 transition duration-300 {{ $key < 3 ? 'text-yellow-400' : 'text-white' }}">
                        <td class="py-4 px-4 text-center text-4xl">
                            @if($key == 0)
                                🏆
                            @elseif($key == 1)
                                🥈
                            @elseif($key == 2)
                                🥉
                            @else
                                <h1>{{ $key + 1 }}</h1>
                            @endif
                        </td>
                        <td class="py-4 px-4 text-center">
                            <div class="flex items-center justify-center">
                                @if ($player->genero == 'f')
                                    <img src="{{ asset('images/female.png') }}" alt="Player" class="rounded-full w-16 h-16 mr-4">
                                @else
                                    <img src="{{ asset('images/male.png') }}" alt="Player" class="rounded-full w-16 h-16 mr-4">
                                @endif
                                <span class="w-40 text-ellipsis overflow-hidden whitespace-nowrap texto" style="font-size: 14px" title="{{ $player->nome }}">{{ $player->nome }}</span>
                            </div>
                        </td>
                        
                        
                        
                        <td class="py-4 px-4 text-center text-lg texto">{{ $player->pontuacao }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
      
        h1, .texto {
            font-family: 'Press Start 2P';
        }
    </style>
</body>
</html>
