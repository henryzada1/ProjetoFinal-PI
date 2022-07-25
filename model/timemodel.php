<?php
session_start();

function inserirtime($conn,$codigoTime,$nometime,$logotime,
$nomejogador,$fonejogador,$emailjo,
$nomejogador1,$fonejogador1,$emailjo1,
$nomejogador2,$fonejogador2,$emailjo2,
$nomejogador3,$fonejogador3,$emailjo3,
$nomejogador4,$fonejogador4,$emailjo4){

    $query = "INSERT INTO `tbtime` (`codigoTimes`,`nomeTime`, `logoTime`,`validaTimekg`)
    VALUES ('{$codigoTime}','{$nometime}','{$logotime}',0);";

$dados = mysqli_query($conn,$query);

    $query = "INSERT INTO `tbjogador` (`nomejogador`, `fonejogador`, `emailjogador`,`validaEmail`,`codigoTimes`)
     VALUES ('{$nomejogador}','{$fonejogador}','{$emailjo}',0,{$codigoTime}),    
     ('{$nomejogador1}','{$fonejogador1}','{$emailjo1}',0,{$codigoTime}),
     ('{$nomejogador2}','{$fonejogador2}','{$emailjo2}',0,{$codigoTime}),
     ('{$nomejogador3}','{$fonejogador3}','{$emailjo3}',0,{$codigoTime}),
     ('{$nomejogador4}','{$fonejogador4}','{$emailjo4}',0,{$codigoTime});";


/*$assunto = "comfirme seu cadastro";
$link = "https://enviaemail11111.000webhostapp.com/confirma.php?h=".$md5;

$mensagem = "cliqui aqui para confirmar seu cadastro".$link;
$header ="From:danilo.asilva43@senacsp.edu.br";

mail($emailjogador, $assunto, $mensagem, $header);
mail($emailjogador1, $assunto, $mensagem, $header);*/

$dados = mysqli_query($conn,$query);
return $dados;
}
	
function buscatimek($conn,$nomeTime){
    $query = "select * from tbtime where nomeTime like '%{$nomeTime}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

function alterarkg ($conn,$codigoTimes,$validaTimekg){
    $query = "update tbtime set
    validaTimekg ='{$validaTimekg}'
     where codigoTimes ='{$codigoTimes}'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
function verificaAcesso($conn,$email){
    $query = "select * from tbjogador where emailJogador = '{$email}'";
    $resultado = mysqli_query($conn, $query);
    $row =mysqli_fetch_assoc($resultado);
    
    if(mysqli_num_rows($resultado) > 0){

    if($row["validaEmail"]== 1){
        $_SESSION["email"] = $row["emailJogador"];
        $_SESSION["time"] = $row["codigoTimes"];
        
        return $row ["emailJogador"];
    }else{
        $_SESSION["acesso"] = "Valide seu e-mail. Verifique na sua caixa de e-mail do senac. <a href='https://login.microsoftonline.com'> Acessar E-mail </a>";
        
        return "Não1";
    }
}else{
        $_SESSION["acesso"] = "Faça o cadastro do Time na página principal <a href='../index.php'> Acessar E-mail </a>";

    return "Não2";
    }
}

function buscaTimeCodigo($conn,$codigoTime){
    $query = "select * from tbtime where codigoTimes={$codigoTime}";
    $resultado = mysqli_query($conn, $query); 
    $row =mysqli_fetch_assoc($resultado);
    return $row;
}

// somente jogadores

function buscaJogadoresTimeCodigo($conn,$codigoTime){
    $query = "select * from tbjogador where codigoTimes={$codigoTime}";
    $resultado = mysqli_query($conn, $query); 
    return $resultado;
}

function sairTime(){
   return session_destroy();
}

function UsarAcesso(){
    $email = isset($_SESSION["email1"]);
    if($email != "adm@senac.com"){
        $_SESSION["msg"] = "<div class='alert alert-danger'
        role='alert'> Faça login para ter acesso so sistema.</div>";
        header("Location:../index.php");
        die();
    }
// ---------------------------------------//
}


?>