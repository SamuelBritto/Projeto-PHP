<?php
    
    include 'operacoes.php';

    //inserirPessoa("João","joao@email.com");

    $pessoa = buscarPorID(2);

    echo "Id: {$pessoa['id']}<br/>";
    echo "Nome: {$pessoa['nome']}<br/>";

    $pessoas = listarTodos();
    for($i = 0, $i < count($pessoas); $i++){
        echo "Id: {$pessoas[$i]['id']} <br/>";
        echo "Nome: {$pessoas[$i]['nome']} <br/>";
        echo "Email: {$pessoas[$i]['email']} <br/>";
    }
?>
