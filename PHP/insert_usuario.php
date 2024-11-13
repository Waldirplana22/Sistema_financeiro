<?php
//conecxão do banco de dados
include 'conexao.php';

//Receber os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tb_user VALUES (null, '$nome','email','$cargo','$senha')";

if ($conexao->query($sql)) {
    echo "<script> alert('Inserido com Sucesso!'); history.back(); </script>";
}else {
    echo "Falha na Conexão com o Banco de Dados";
}

?>