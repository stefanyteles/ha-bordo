<?php


   include_once("conexao.php");
   

   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $dtanasc = ['datanascimento'];
   $generp = $_POST['genero'];
   $telefone = $_POST['telefone'];
   $email = $_POST['email'];
   $cep = $_POST['cep'];
   $rua = $_POST['rua'];
   $numero= $_POST['numero'];
   $bairro = $_POST['bairro'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $estadocivil = $_POST['estadocivil'];
   $filhos = $_POST['filhos'];
   $filhosqtd = $_POST['filhosqtd'];
   $escolaridade = $_POST['escolaridade'];
   $profissao= $_POST['profissao'];
   $senha= $_POST['senha'];

   $sql = "INSERT INTO usuario (nome,cpf,datanascimento,genero,telefone,email,cep,rua,numero,bairro,cidade,estado,estadocivil,filhos,filhosqtd,escolaridade,profissao,senha); VALUES ('$nome','$cpf','$dtanasc','$genero','$telefone,'$email','$cep','$rua','$numero'','$bairro,'$cidade','$estado','$estadocivil','$filhos','$filhosqtd','$escolaridade','$profissao','$senha')";
   
     
   $salvar = mysqli_query($conexao,$sql);

   mysqli_close($conexao);
    
?>