<?php
session_start();
//include_once("../php/teste.php");
include_once("../model/conexao.php");
include_once("../model/timemodel.php");

extract($_REQUEST,EXTR_OVERWRITE);



$min = 1;
$max = 1000;
$codigoTime  = rand($min,$max); 

$emailjogador;
$emailjogador1;
$emailjogador2;
$emailjogador3;
$emailjogador4;

$emailjo = $emailjogador."@senacsp.edu.br";
$emailjo1 = $emailjogador1."@senacsp.edu.br";
$emailjo2 = $emailjogador2."@senacsp.edu.br";
$emailjo3 = $emailjogador3."@senacsp.edu.br";
$emailjo4 = $emailjogador4."@senacsp.edu.br";

$confirma = inserirtime($conn,$codigoTime,$nometime,$logotime,
$nomejogador,$fonejogador,$emailjo,
$nomejogador1,$fonejogador1,$emailjo1,
$nomejogador2,$fonejogador2,$emailjo2,
$nomejogador3,$fonejogador3,$emailjo3,
$nomejogador4,$fonejogador4,$emailjo4);

  if($confirma){
    $_SESSION['teste123'] = array($emailjo,$emailjo1,$emailjo2,$emailjo3,$emailjo4);
      require_once("../php/teste.php");
	echo "<script>location.href='../ViwGenTIme/ViewAguardValid.php'</script>";
	return;

  }else{
echo("Não foi possível cadastrar seu dados. Por favor revise seus dados");
echo($nomejogador1);
  }
?>