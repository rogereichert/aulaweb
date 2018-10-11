<?php
    include('header.php');
?>
<div class="container">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse hendrerit bibendum neque sed sodales. Fusce ut vestibulum dui, vitae condimentum mi. Integer quis tellus nec mi porttitor maximus. Integer lacinia id nisl at tempor. Donec non risus eget felis bibendum fringilla in vel enim. Suspendisse egestas placerat metus scelerisque pharetra. Fusce aliquet, ligula eu lobortis facilisis, lorem velit vestibulum odio, nec cursus arcu urna quis velit. Aenean imperdiet dolor at magna imperdiet consectetur quis id nunc. Praesent sagittis facilisis nunc, sed fermentum dui maximus ut.</p>
<img src="img/servico.png" alt="" class="img-fluid">
<?php 

    if (isset($_POST['email']) && isset($_POST['senha'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "<h1>" . "Logado com Sucesso: " . $email . "</h1>";
    }

?>
</div>
<?php
    include('footer.php');
?>