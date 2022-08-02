<?php
    include("conexao.php");
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];

    $sql="INSERT INTO cadastro(nome, telefone) VALUES ('$nome', '$telefone')";
    
    if(mysqli_query($conexao, $sql))
        {
            echo "Dados Enviados com sucesso";
        }
        else
        {
            echo "Erro".mysqli_connect_error($conexao);
        
        }
    mysqli_close($conexao);
?>