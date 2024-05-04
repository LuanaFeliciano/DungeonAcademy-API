<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">

  <div class="card">

    <div class="card-header text-center font-weight-bold p-3">
      CADASTRAR PERGUNTA
    </div>

    <div class="card-body p-5">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="api/perguntas">
        <div class="form-group">
          <label for="exampleInputEmail1">Sala</label>
          <input type="text" name="sala" class="form-control" placeholder="Sala"><br>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tema</label>
          <input type="text" name="tema" class="form-control" placeholder="Tema"><br>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Dificuldade</label>
          <input type="number" name="dificuldade" class="form-control" placeholder="Dificuldade"><br>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Pergunta</label>
          <textarea name="descricao" placeholder="Descrição" class="form-control"></textarea><br>
        </div>
        <div class='text-center'>
            <button type="submit" class="btn btn-primary">Cadastrar Pergunta</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
