<?php
    function getConnection(){

        $conexao = mysqli_connect("localhost", "root", "", "pessoasdb", "3307");

        if($conexao){
            echo "Conectado <br/>";
        }else{
            echo "Erro Conexao <br/>";
        }

        return $conexao;
    }

    function closeConnection($conexao){
        mysqli_close($conexao);
    }

?>

