<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-5">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sala</th>
                    <th>Tema</th>
                    <th>Dificuldade</th>
                    <th>Descrição da Pergunta</th>
                    <th>Descrição da Resposta</th>
                    <th>É</th>
                </tr>
            </thead>
            <tbody>
                @foreach($perguntas as $pergunta)
                <tr>
                    <td>{{ $pergunta->sala }}</td>
                    <td>{{ $pergunta->tema }}</td>
                    <td>{{ $pergunta->dificuldade }}</td>
                    <td>{{ $pergunta->descricao }}</td>
                    <td>{{ $pergunta->resposta_descricao ?? '-' }}</td>

                    @if($pergunta->correta)
                        <td>Correta</td>
                    @else
                        <td>Incorreta</td>
                    @endif
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>
