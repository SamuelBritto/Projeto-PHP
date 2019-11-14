<?php

    include 'Conexao.php';

    function inserirPessoa($nome, $email){

      
        $conn = getConnection();
        
        $querySql = "INSERT INTO pessoas (nome,email) VALUES ('$nome','$email')"; 
       
        if(mysqli_query($conn, $querySql)){
            echo "Pessoa inserida com sucesso!<br/>";
        }else{
            echo "Erro ao tentar inserir um pessoa!<br/>";
        }
       
        closeConnection($conn);
    }

    function deletar($id){
        $conexao = getConnection();

        $query = "DELETE FROM pessoas WHERE id = '$id'";

        if (mysqli_querry($conexao, $query) == true){
            echo "Pessoa Deletada com Sucesso";
        }else {
            echo "Error ao deletar";
        }
        closeConnection($conexao);
    }

    function buscarPorId($id){
        $conexao = getConnection();

        $query = "SELECT * FROM pessoas WHERE id = '$id'";

        $result = msqli_querry($conexao, $query);

        $pessoa = mysqli_fetch_array($result);

        closeConnection($conexao);
        return $pessoa;
    }
    function listarTodos(){
        $pessoas = array();
        $conexao = getConnection();
        $querySql = "SELECT * FROM pessoas";

        $result = ($pessoa = msqli_fetch_array($result)){
            
        }
    }
    function atualizar($id, $nome, $email){

        $conexao = getConnection();

        $querySql = "UPDATE pessoas SET nome = '$nome', email = '$email' WHERE id = '$id'";

        if(mysqli_query($conexao, $querySql)){
            echo "Pessoa alterada com Sucesso!";
        }else{
            echo "Error ao tentar alterar uma pessoa!";
        }

        closeConnection($conexao);
    }

?>
