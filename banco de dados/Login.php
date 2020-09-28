<!DOCTYPE>
<?php

include_once ("conexao.php");

?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

	

	<style>
body 
{
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* estilizar recipiente */
.container 
{
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* botoes de link */
input,
.btn
 {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remover sublinhados  */
}

input:hover,
.btn:hover 
{
  opacity: 1;
}

/* adicionar cores para os botes do face e do google  */
.fb 
{
  background-color: #3B5998;
  color: white;
}



.google
{
  background-color: #dd4b39;
  color: white;
}

/* botao de envio */
input[type=submit] 
{
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover 
{
  background-color: #45a049;
}

/* layout das colunas  */
.col 
{
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after 
{
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl 
{
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext 
{
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* esconder texto em telas medias e grandes  */
.hide-md-lg 
{
  display: none;
}

/* recipiente inferior  */
.bottom-container 
{
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Para empilhar as colunas uma em baixo da outra quando estiver a tela 650px*/
@media screen and (max-width: 650px)
 {
  .col 
  {
    width: 100%;
    margin-top: 0;
  }
  /*  coluna vertical  */
  .vl 
  {
    display: none;
  }
  /*mostrar o texto oculto */
  .hide-md-lg 
  {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>

<h2>  Login Social  </h2>

<div class="container">
  
    <div class="row">
      <h2 style="text-align:center"> Rede Social ou Manualmente</h2>
      <div class="vl">
        <span class="vl-innertext">ou</span>
      </div>

      <div class="col">
        <a href="./Entrarcomface.php" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login  Facebook
         </a>
        
        <a href="./Entrarcomgoogle.php" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login  Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>ou Login MAnual:</p>
        </div>
      <form method="POST"   action="processa.php">
        <input type="text" name="Email" placeholder="Email" required maxlength="30">
        <input mp5 type="Senha" name="Senha" placeholder="Senha" required maxlength="32">
        <input type="submit" value="Login">
      </div>
      
    </div>
  
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="senha.html" style="color:white" class="btn">Inscrever-se</a>
    </div>

    <div class="col">
      <a href="./LoginAdministrativo.php" style="color:white" class="btn"> Administrativo</a>
    </div>
  </div>
</div>
</form>


</body>






</html>
