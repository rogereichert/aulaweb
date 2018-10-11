<?php
    include('header.php');
?>
<div class="container">
<?php 

    if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['endereco']) 
        && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['cargo'])) {
        
        $nome     = $_POST['nome'];
        $cpf      = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $email    = $_POST['email'];
        $senha    = $_POST['senha'];
        $cargo    = $_POST['cargo'];

        echo "Dados enviados com sucesso <br><br><br>";
        echo "<h2>" . "DADOS DO USUÁRIO" . "<br>";
        echo "<h4>" . "Nome: " .     $nome . "<br>" .
                      "CPF: " .      $cpf  . "<br>" .
                      "Endereço: " . $endereco . "<br>" .
                      "E-mail: " .   $email . "<br>" . 
                      "Senha: " .    $senha . "<br>"    .
                      "Cargo: " .    $cargo . "<br><br><br><br></h4>" ;
        
            
    }

?>
</div>
<?php
    include('footer.php');
?>