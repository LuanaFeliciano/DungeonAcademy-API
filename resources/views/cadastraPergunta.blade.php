<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center font-weight-bold p-3">
                    CADASTRAR PERGUNTA
                </div>
                <div class="card-body p-5">
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="api/perguntas">
                        <div class="form-group">
                            <label for="sala">Sala</label>
                            <input type="text" name="sala" class="form-control" placeholder="Sala"><br>
                        </div>
                        <div class="form-group">
                            <label for="tema">Tema</label>
                            <input type="text" name="tema" class="form-control" placeholder="Tema"><br>
                        </div>
                        <div class="form-group">
                            <label for="dificuldade">Dificuldade</label>
                            <input type="number" name="dificuldade" class="form-control" placeholder="Dificuldade"><br>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Pergunta</label>
                            <textarea name="descricao" placeholder="Descrição" class="form-control"></textarea><br>
                        </div>
                        <div class='text-center'>
                            <button type="submit" class="btn btn-primary">Cadastrar Pergunta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center font-weight-bold p-3">
                    CADASTRAR RESPOSTA
                </div>
                <div class="card-body p-5">
                    <form name="add-answer-form" id="add-answer-form" method="post" action="api/respostas">
                        <div class="form-group">
                            <label for="id_pergunta">ID da Pergunta</label>
                            <input type="number" name="id_pergunta" class="form-control" placeholder="ID da Pergunta"><br>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Resposta</label>
                            <textarea name="descricao" placeholder="Descrição" class="form-control"></textarea><br>
                        </div>
                        <div class="form-group">
                            <label for="correta">Correta</label>
                            <select name="correta" class="form-control">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select><br>
                        </div>
                        <div class='text-center'>
                            <button type="submit" class="btn btn-primary">Cadastrar Resposta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold p-3">
                    CADASTRAR DIFICULDADE
                </div>
                <div class="card-body p-5">
                    <form name="add-answer-form" id="add-answer-form" method="post" action="api/dificuldade">
                        <div class="form-group">
                            <label for="dificuldade">Dificuldade</label>
                            <input type="text" name="dificuldade" class="form-control" placeholder="Dificuldade"><br>
                        </div>
                        <div class="form-group">
                            <label for="pontuacao">Pontuação</label>
                            <input type="number" name="pontuacao" class="form-control" placeholder="Pontuação"><br><br>
                        </div>
                        
                        <div class='text-center'>
                            <button type="submit" class="btn btn-primary">Cadastrar Dificuldade</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
