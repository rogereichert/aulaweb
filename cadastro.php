<?php
    include('header.php');
?>
<div class="container">
<img src="img/servico.png" alt="" class="img-fluid">
<form action="mostrar.php" method="post">
  <div class="form-group">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" required>
  </div>
  <div class="form-group">
    <label for="cpf">CPF: </label>
    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Seu CPF" required>
  </div>
  <div class="form-group">
    <label for="Endereço">Endereço: </label>
    <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Seu Endereço" required>
  </div>
  <div class="form-group">
    <label for="email">E-mail: </label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Seu E-mail" required>
  </div>
  <div class="form-group">
    <label for="senha">Senha: </label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="Sua Senha" required>
  </div>
  <div class="form-group">
    <label for="senha">Confirme sua Senha: </label>
    <input type="password" class="form-control" id="senha" placeholder="Repita Sua Senha" required>
  </div>
  <div class="form-group" required>
    <label for="cargo">Example select</label>
    <select class="form-control" name="cargo" id="cargo">
      <option>Escolha...</option>
      <option>Pedreiro</option>
      <option>Segurança</option>
      <option>Garçom</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Enviar</button>
  <button type="submit" class="btn btn-danger">Cancelar</button>
</form>
</div>
<?php
    include('footer.php');
?>