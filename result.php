<?php
    //importar a classe
    include "Pessoa.class.php";

    //instancia a clase
    $usuario = new Pessoa("", 0, "", "");

    //atribui valores aos atributos
    //inicializa os atributos
    $usuario->setNome = $_POST['nome'];
    $usuario->setIdade = $_POST['idade'];
    $usuario->setEmail = $_POST['email'];


        //exibe os dados
        echo "<h1>Dados do Usuarios</h1>";
        echo "<hr />";
        echo "<p><b>Nome:<b> " . $usuario->getNome() . ".</p>";
        echo "<p><b>Idade:<b> " . $usuario->getIdade() . ".</p>";
        echo "<p><b>Email:<b> " . $usuario->getEmail() . ".</p>";



?>