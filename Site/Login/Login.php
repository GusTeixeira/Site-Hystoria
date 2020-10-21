<!DOCTYPE html>
<?php
require_once 'Usuario.php';
$u = new Usuario;
?>
<html lang="pt-br">

 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="description" content="TCC">
   <meta name="keywords" content="História, Card Game, Unity">
   <meta name="author" content="Allan Rodrigo, Gabriel Bonifácio, Gustavo Teixeira, João Manuel e Pedro Jorge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="shortcut icon" href="../Ícone.ico" sizes="64x64">
   <link rel="stylesheet" type="text/css" href="Login_Estilos.css">
   <script type="text/javascript" src="../jquery-3.4.1.min.js"></script>
 </head>

 <body>
   <div class="corpo-form">
    <h1>Entre!</h1>
    <form method="POST">
      <input type="text" name="usuario" placeholder="Usuário" maxlength="16">
      <input type="password" name ="senha" placeholder="Senha" maxlength="15">
      <input type="submit" value="ACESSAR" id="btnAcessar">
      <a href="Cadastro.php" id="linkcadastro"> AINDA NÃO É CADASTRADO? <Strong> Cadastre-se! </Strong> </a>
    </form>
    <?php
    if(isset($_POST['usuario'])){
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);
    if(!empty($usuario) && !empty($senha))
    { 
      $u->conectar("hystoriabd","localhost","root","");
      if($u->msgErro == ""){
        if($u->logar($usuario, $senha) == true){
          header("location: Index_Privado/AreaPrivada.php");
        }
        else{
          echo "<p>Usuario e/ou senha estao incorretos!</p>";
        }
        }
        else{
          echo "<p>Erro: ".$u->msgErro."</p>";
        }
        }
        else{
          echo "<p>Preencha todos os campos!</p>";
        }
      }
    ?>
   </div>
 </body>

</html>