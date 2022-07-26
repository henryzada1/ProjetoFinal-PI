<?php
session_start();
include_once("../model/conexao.php");
include_once('../controller/buscaEmail.php');

extract($_REQUEST,EXTR_OVERWRITE);

$tes = buscaEmail($conn,$h);

$h = $_GET['h'];

if(!empty($h)){
  $query = "UPDATE tbjogador set
  validaEmail = 1
   where MD5(emailJogador) ='{$h}'";
  $resultado = mysqli_query($conn, $query);
  //return $resultado;

}else{
  echo'Não foi possivel editar';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Major SENAC</title>
  <link rel="icon" type="image/x-icon" href="../img/fivecon.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    
    
</head>
<body class="body2">
<nav class="navbar bg-dark ">
        <div class="container-fluid ">
          <a class="navbar-brand text-white" >Major League</a>
          <button class="icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <span class="icon"></span>
  </button>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header bg-dark">
      <h5 class="text-white " id="offcanvasNavbarLabel">Major League</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-dark">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        

        <li class="nav-item">
            <a class="nav-link active text-white" href="../index.php" >Home</a>
          </li>

        <li class="nav-item">
            <a class="nav-link active text-white" href="../ViewDoc/documentacao.php" >Documentação</a>
          </li>
        
      </ul>

    </div>
  </div>
</div>
</nav>
<main>
<div class="junta">
    <div class="msgsucesso">
        Você finalizou seu cadastro, verifique como esta seu time na pagina inicial
    </div>
<div class="junta">
	<div>
	  <a href="../controller/sair.php"><button type="button" id="btnvoltar" class="btn btn-success" > Voltar para pagina principal</button></a>
	</div>
</div>
</main>
  <footer class="footer">
  <div>O objetivo do nosso Projeto alem de colocar em prática o nosso aprendizado, tambem tem o objetivo de arracadar alimentos para pessoas que se encontra em condições de vulnerabilidade social, econômica e/ou cultural. </div>
</footer>
</body>
</html>