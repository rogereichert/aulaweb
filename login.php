<?php
    include('header.php');
?>
<div class="container">
<img src="img/servico.png" alt="" class="img-fluid">
<form method="post" action="index.php">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email@email.com" required>
  </div>
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar dados</label>
  </div>
  <button type="submit" class="btn btn-success">Enviar</button>
</form>
</div>
<?php
    include('footer.php');
?>